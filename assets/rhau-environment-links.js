(()=>{"use strict";var o=Object.defineProperty,r=(n,t,e)=>t in n?o(n,t,{enumerable:!0,configurable:!0,writable:!0,value:e}):n[t]=e,i=(n,t,e)=>r(n,typeof t!="symbol"?t+"":t,e);class s extends HTMLDialogElement{constructor(){super(),i(this,"shadowRoot"),i(this,"onKeyDown",t=>{switch(t.code){case"Space":this.handleSpaceDown(t);break;case"Escape":this.handleEscapeDown(t);break}}),i(this,"onClick",t=>{const e=t.target;if(e.matches("rhau-environment-link"))return this.openEnvironmentLink(t.target);e.closest("rhau-environment-links")||this.open&&(t.stopPropagation(),this.close())}),i(this,"handleSpaceDown",t=>{const e=t.target;if(!(this.isInputElement(e)||this.isSpecialKeyDown(t))){if(t.preventDefault(),t.stopPropagation(),e.matches("rhau-environment-link")){this.openEnvironmentLink(t.target);return}this.showModal(),this.focusFirstLink()}})}connectedCallback(){document.addEventListener("keydown",this.onKeyDown,{capture:!0}),document.addEventListener("click",this.onClick,{capture:!0})}disconnectedCallback(){document.removeEventListener("keydown",this.onKeyDown),document.removeEventListener("click",this.onClick)}isInputElement(t){if(t!=null&&t.closest("rhau-environment-link"))return!1;const e=t==null?void 0:t.getAttribute("tabindex");return e!==null?!isNaN(parseInt(e))&&parseInt(e)>=0:t==null?void 0:t.matches('button, input, textarea, select, a, [contenteditable="true"]')}isSpecialKeyDown(t){return t.metaKey||t.ctrlKey||t.shiftKey||t.altKey}focusFirstLink(){var t;(t=this.querySelector("rhau-environment-link:first-of-type"))==null||t.focus()}focusLastLink(){var t;(t=this.querySelector("rhau-environment-link:last-of-type"))==null||t.focus()}handleEscapeDown(t){this.open&&(t.preventDefault(),t.stopPropagation(),this.close())}openEnvironmentLink(t){if(!this.open)return;const e=new URL(window.location.href),a=e.pathname+e.search+e.hash,c=new URL(t.getAttribute("data-remote-host"));window.open(c.origin+a),this.close()}}customElements.define("rhau-environment-links",s,{extends:"dialog"})})();