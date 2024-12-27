<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Cloner;

use RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\Caster;
use RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Exception\ThrowingCasterException;
/**
 * AbstractCloner implements a generic caster mechanism for objects and resources.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
abstract class AbstractCloner implements ClonerInterface
{
    public static array $defaultCasters = ['__PHP_Incomplete_Class' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\Caster', 'castPhpIncompleteClass'], 'RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\CutStub' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\StubCaster', 'castStub'], 'RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\CutArrayStub' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\StubCaster', 'castCutArray'], 'RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\ConstStub' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\StubCaster', 'castStub'], 'RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\EnumStub' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\StubCaster', 'castEnum'], 'RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\ScalarStub' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\StubCaster', 'castScalar'], 'Fiber' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\FiberCaster', 'castFiber'], 'Closure' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\ReflectionCaster', 'castClosure'], 'Generator' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\ReflectionCaster', 'castGenerator'], 'ReflectionType' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\ReflectionCaster', 'castType'], 'ReflectionAttribute' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\ReflectionCaster', 'castAttribute'], 'ReflectionGenerator' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\ReflectionCaster', 'castReflectionGenerator'], 'ReflectionClass' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\ReflectionCaster', 'castClass'], 'ReflectionClassConstant' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\ReflectionCaster', 'castClassConstant'], 'ReflectionFunctionAbstract' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\ReflectionCaster', 'castFunctionAbstract'], 'ReflectionMethod' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\ReflectionCaster', 'castMethod'], 'ReflectionParameter' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\ReflectionCaster', 'castParameter'], 'ReflectionProperty' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\ReflectionCaster', 'castProperty'], 'ReflectionReference' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\ReflectionCaster', 'castReference'], 'ReflectionExtension' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\ReflectionCaster', 'castExtension'], 'ReflectionZendExtension' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\ReflectionCaster', 'castZendExtension'], 'RH\AdminUtils\Scoped\Doctrine\Common\Persistence\ObjectManager' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\StubCaster', 'cutInternals'], 'RH\AdminUtils\Scoped\Doctrine\Common\Proxy\Proxy' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\DoctrineCaster', 'castCommonProxy'], 'RH\AdminUtils\Scoped\Doctrine\ORM\Proxy\Proxy' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\DoctrineCaster', 'castOrmProxy'], 'RH\AdminUtils\Scoped\Doctrine\ORM\PersistentCollection' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\DoctrineCaster', 'castPersistentCollection'], 'RH\AdminUtils\Scoped\Doctrine\Persistence\ObjectManager' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\StubCaster', 'cutInternals'], 'DOMException' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\DOMCaster', 'castException'], 'RH\AdminUtils\Scoped\Dom\Exception' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\DOMCaster', 'castException'], 'DOMStringList' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\DOMCaster', 'castLength'], 'DOMNameList' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\DOMCaster', 'castLength'], 'DOMImplementation' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\DOMCaster', 'castImplementation'], 'RH\AdminUtils\Scoped\Dom\Implementation' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\DOMCaster', 'castImplementation'], 'DOMImplementationList' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\DOMCaster', 'castLength'], 'DOMNode' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\DOMCaster', 'castNode'], 'RH\AdminUtils\Scoped\Dom\Node' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\DOMCaster', 'castNode'], 'DOMNameSpaceNode' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\DOMCaster', 'castNameSpaceNode'], 'DOMDocument' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\DOMCaster', 'castDocument'], 'RH\AdminUtils\Scoped\Dom\XMLDocument' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\DOMCaster', 'castXMLDocument'], 'RH\AdminUtils\Scoped\Dom\HTMLDocument' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\DOMCaster', 'castHTMLDocument'], 'DOMNodeList' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\DOMCaster', 'castLength'], 'RH\AdminUtils\Scoped\Dom\NodeList' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\DOMCaster', 'castLength'], 'DOMNamedNodeMap' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\DOMCaster', 'castLength'], 'RH\AdminUtils\Scoped\Dom\DTDNamedNodeMap' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\DOMCaster', 'castLength'], 'DOMCharacterData' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\DOMCaster', 'castCharacterData'], 'RH\AdminUtils\Scoped\Dom\CharacterData' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\DOMCaster', 'castCharacterData'], 'DOMAttr' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\DOMCaster', 'castAttr'], 'RH\AdminUtils\Scoped\Dom\Attr' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\DOMCaster', 'castAttr'], 'DOMElement' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\DOMCaster', 'castElement'], 'RH\AdminUtils\Scoped\Dom\Element' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\DOMCaster', 'castElement'], 'DOMText' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\DOMCaster', 'castText'], 'RH\AdminUtils\Scoped\Dom\Text' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\DOMCaster', 'castText'], 'DOMDocumentType' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\DOMCaster', 'castDocumentType'], 'RH\AdminUtils\Scoped\Dom\DocumentType' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\DOMCaster', 'castDocumentType'], 'DOMNotation' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\DOMCaster', 'castNotation'], 'RH\AdminUtils\Scoped\Dom\Notation' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\DOMCaster', 'castNotation'], 'DOMEntity' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\DOMCaster', 'castEntity'], 'RH\AdminUtils\Scoped\Dom\Entity' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\DOMCaster', 'castEntity'], 'DOMProcessingInstruction' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\DOMCaster', 'castProcessingInstruction'], 'RH\AdminUtils\Scoped\Dom\ProcessingInstruction' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\DOMCaster', 'castProcessingInstruction'], 'DOMXPath' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\DOMCaster', 'castXPath'], 'XMLReader' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\XmlReaderCaster', 'castXmlReader'], 'ErrorException' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\ExceptionCaster', 'castErrorException'], 'Exception' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\ExceptionCaster', 'castException'], 'Error' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\ExceptionCaster', 'castError'], 'RH\AdminUtils\Scoped\Symfony\Bridge\Monolog\Logger' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\StubCaster', 'cutInternals'], 'RH\AdminUtils\Scoped\Symfony\Component\DependencyInjection\ContainerInterface' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\StubCaster', 'cutInternals'], 'RH\AdminUtils\Scoped\Symfony\Component\EventDispatcher\EventDispatcherInterface' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\StubCaster', 'cutInternals'], 'RH\AdminUtils\Scoped\Symfony\Component\HttpClient\AmpHttpClient' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\SymfonyCaster', 'castHttpClient'], 'RH\AdminUtils\Scoped\Symfony\Component\HttpClient\CurlHttpClient' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\SymfonyCaster', 'castHttpClient'], 'RH\AdminUtils\Scoped\Symfony\Component\HttpClient\NativeHttpClient' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\SymfonyCaster', 'castHttpClient'], 'RH\AdminUtils\Scoped\Symfony\Component\HttpClient\Response\AmpResponse' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\SymfonyCaster', 'castHttpClientResponse'], 'RH\AdminUtils\Scoped\Symfony\Component\HttpClient\Response\CurlResponse' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\SymfonyCaster', 'castHttpClientResponse'], 'RH\AdminUtils\Scoped\Symfony\Component\HttpClient\Response\NativeResponse' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\SymfonyCaster', 'castHttpClientResponse'], 'RH\AdminUtils\Scoped\Symfony\Component\HttpFoundation\Request' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\SymfonyCaster', 'castRequest'], 'RH\AdminUtils\Scoped\Symfony\Component\Uid\Ulid' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\SymfonyCaster', 'castUlid'], 'RH\AdminUtils\Scoped\Symfony\Component\Uid\Uuid' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\SymfonyCaster', 'castUuid'], 'RH\AdminUtils\Scoped\Symfony\Component\VarExporter\Internal\LazyObjectState' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\SymfonyCaster', 'castLazyObjectState'], 'RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Exception\ThrowingCasterException' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\ExceptionCaster', 'castThrowingCasterException'], 'RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\TraceStub' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\ExceptionCaster', 'castTraceStub'], 'RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\FrameStub' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\ExceptionCaster', 'castFrameStub'], 'RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Cloner\AbstractCloner' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\StubCaster', 'cutInternals'], 'RH\AdminUtils\Scoped\Symfony\Component\ErrorHandler\Exception\FlattenException' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\ExceptionCaster', 'castFlattenException'], 'RH\AdminUtils\Scoped\Symfony\Component\ErrorHandler\Exception\SilencedErrorContext' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\ExceptionCaster', 'castSilencedErrorContext'], 'RH\AdminUtils\Scoped\Imagine\Image\ImageInterface' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\ImagineCaster', 'castImage'], 'RH\AdminUtils\Scoped\Ramsey\Uuid\UuidInterface' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\UuidCaster', 'castRamseyUuid'], 'RH\AdminUtils\Scoped\ProxyManager\Proxy\ProxyInterface' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\ProxyManagerCaster', 'castProxy'], 'PHPUnit_Framework_MockObject_MockObject' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\StubCaster', 'cutInternals'], 'RH\AdminUtils\Scoped\PHPUnit\Framework\MockObject\MockObject' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\StubCaster', 'cutInternals'], 'RH\AdminUtils\Scoped\PHPUnit\Framework\MockObject\Stub' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\StubCaster', 'cutInternals'], 'RH\AdminUtils\Scoped\Prophecy\Prophecy\ProphecySubjectInterface' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\StubCaster', 'cutInternals'], 'RH\AdminUtils\Scoped\Mockery\MockInterface' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\StubCaster', 'cutInternals'], 'PDO' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\PdoCaster', 'castPdo'], 'PDOStatement' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\PdoCaster', 'castPdoStatement'], 'AMQPConnection' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\AmqpCaster', 'castConnection'], 'AMQPChannel' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\AmqpCaster', 'castChannel'], 'AMQPQueue' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\AmqpCaster', 'castQueue'], 'AMQPExchange' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\AmqpCaster', 'castExchange'], 'AMQPEnvelope' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\AmqpCaster', 'castEnvelope'], 'ArrayObject' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\SplCaster', 'castArrayObject'], 'ArrayIterator' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\SplCaster', 'castArrayIterator'], 'SplDoublyLinkedList' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\SplCaster', 'castDoublyLinkedList'], 'SplFileInfo' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\SplCaster', 'castFileInfo'], 'SplFileObject' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\SplCaster', 'castFileObject'], 'SplHeap' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\SplCaster', 'castHeap'], 'SplObjectStorage' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\SplCaster', 'castObjectStorage'], 'SplPriorityQueue' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\SplCaster', 'castHeap'], 'OuterIterator' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\SplCaster', 'castOuterIterator'], 'WeakMap' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\SplCaster', 'castWeakMap'], 'WeakReference' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\SplCaster', 'castWeakReference'], 'Redis' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\RedisCaster', 'castRedis'], 'RH\AdminUtils\Scoped\Relay\Relay' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\RedisCaster', 'castRedis'], 'RedisArray' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\RedisCaster', 'castRedisArray'], 'RedisCluster' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\RedisCaster', 'castRedisCluster'], 'DateTimeInterface' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\DateCaster', 'castDateTime'], 'DateInterval' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\DateCaster', 'castInterval'], 'DateTimeZone' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\DateCaster', 'castTimeZone'], 'DatePeriod' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\DateCaster', 'castPeriod'], 'GMP' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\GmpCaster', 'castGmp'], 'MessageFormatter' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\IntlCaster', 'castMessageFormatter'], 'NumberFormatter' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\IntlCaster', 'castNumberFormatter'], 'IntlTimeZone' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\IntlCaster', 'castIntlTimeZone'], 'IntlCalendar' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\IntlCaster', 'castIntlCalendar'], 'IntlDateFormatter' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\IntlCaster', 'castIntlDateFormatter'], 'Memcached' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\MemcachedCaster', 'castMemcached'], 'RH\AdminUtils\Scoped\Ds\Collection' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\DsCaster', 'castCollection'], 'RH\AdminUtils\Scoped\Ds\Map' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\DsCaster', 'castMap'], 'RH\AdminUtils\Scoped\Ds\Pair' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\DsCaster', 'castPair'], 'RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\DsPairStub' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\DsCaster', 'castPairStub'], 'mysqli_driver' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\MysqliCaster', 'castMysqliDriver'], 'CurlHandle' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\ResourceCaster', 'castCurl'], ':dba' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\ResourceCaster', 'castDba'], ':dba persistent' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\ResourceCaster', 'castDba'], 'GdImage' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\ResourceCaster', 'castGd'], ':gd' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\ResourceCaster', 'castGd'], ':pgsql large object' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\PgSqlCaster', 'castLargeObject'], ':pgsql link' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\PgSqlCaster', 'castLink'], ':pgsql link persistent' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\PgSqlCaster', 'castLink'], ':pgsql result' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\PgSqlCaster', 'castResult'], ':process' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\ResourceCaster', 'castProcess'], ':stream' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\ResourceCaster', 'castStream'], 'OpenSSLCertificate' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\ResourceCaster', 'castOpensslX509'], ':OpenSSL X.509' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\ResourceCaster', 'castOpensslX509'], ':persistent stream' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\ResourceCaster', 'castStream'], ':stream-context' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\ResourceCaster', 'castStreamContext'], 'XmlParser' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\XmlResourceCaster', 'castXml'], ':xml' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\XmlResourceCaster', 'castXml'], 'RdKafka' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\RdKafkaCaster', 'castRdKafka'], 'RH\AdminUtils\Scoped\RdKafka\Conf' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\RdKafkaCaster', 'castConf'], 'RH\AdminUtils\Scoped\RdKafka\KafkaConsumer' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\RdKafkaCaster', 'castKafkaConsumer'], 'RH\AdminUtils\Scoped\RdKafka\Metadata\Broker' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\RdKafkaCaster', 'castBrokerMetadata'], 'RH\AdminUtils\Scoped\RdKafka\Metadata\Collection' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\RdKafkaCaster', 'castCollectionMetadata'], 'RH\AdminUtils\Scoped\RdKafka\Metadata\Partition' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\RdKafkaCaster', 'castPartitionMetadata'], 'RH\AdminUtils\Scoped\RdKafka\Metadata\Topic' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\RdKafkaCaster', 'castTopicMetadata'], 'RH\AdminUtils\Scoped\RdKafka\Message' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\RdKafkaCaster', 'castMessage'], 'RH\AdminUtils\Scoped\RdKafka\Topic' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\RdKafkaCaster', 'castTopic'], 'RH\AdminUtils\Scoped\RdKafka\TopicPartition' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\RdKafkaCaster', 'castTopicPartition'], 'RH\AdminUtils\Scoped\RdKafka\TopicConf' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\RdKafkaCaster', 'castTopicConf'], 'RH\AdminUtils\Scoped\FFI\CData' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\FFICaster', 'castCTypeOrCData'], 'RH\AdminUtils\Scoped\FFI\CType' => ['RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster\FFICaster', 'castCTypeOrCData']];
    protected int $maxItems = 2500;
    protected int $maxString = -1;
    protected int $minDepth = 1;
    /**
     * @var array<string, list<callable>>
     */
    private array $casters = [];
    /**
     * @var callable|null
     */
    private $prevErrorHandler;
    private array $classInfo = [];
    private int $filter = 0;
    /**
     * @param callable[]|null $casters A map of casters
     *
     * @see addCasters
     */
    public function __construct(?array $casters = null)
    {
        $this->addCasters($casters ?? static::$defaultCasters);
    }
    /**
     * Adds casters for resources and objects.
     *
     * Maps resources or objects types to a callback.
     * Types are in the key, with a callable caster for value.
     * Resource types are to be prefixed with a `:`,
     * see e.g. static::$defaultCasters.
     *
     * @param callable[] $casters A map of casters
     */
    public function addCasters(array $casters): void
    {
        foreach ($casters as $type => $callback) {
            $this->casters[$type][] = $callback;
        }
    }
    /**
     * Sets the maximum number of items to clone past the minimum depth in nested structures.
     */
    public function setMaxItems(int $maxItems): void
    {
        $this->maxItems = $maxItems;
    }
    /**
     * Sets the maximum cloned length for strings.
     */
    public function setMaxString(int $maxString): void
    {
        $this->maxString = $maxString;
    }
    /**
     * Sets the minimum tree depth where we are guaranteed to clone all the items.  After this
     * depth is reached, only setMaxItems items will be cloned.
     */
    public function setMinDepth(int $minDepth): void
    {
        $this->minDepth = $minDepth;
    }
    /**
     * Clones a PHP variable.
     *
     * @param int $filter A bit field of Caster::EXCLUDE_* constants
     */
    public function cloneVar(mixed $var, int $filter = 0): Data
    {
        $this->prevErrorHandler = set_error_handler(function ($type, $msg, $file, $line, $context = []) {
            if (\E_RECOVERABLE_ERROR === $type || \E_USER_ERROR === $type) {
                // Cloner never dies
                throw new \ErrorException($msg, 0, $type, $file, $line);
            }
            if ($this->prevErrorHandler) {
                return ($this->prevErrorHandler)($type, $msg, $file, $line, $context);
            }
            return \false;
        });
        $this->filter = $filter;
        if ($gc = gc_enabled()) {
            gc_disable();
        }
        try {
            return new Data($this->doClone($var));
        } finally {
            if ($gc) {
                gc_enable();
            }
            restore_error_handler();
            $this->prevErrorHandler = null;
        }
    }
    /**
     * Effectively clones the PHP variable.
     */
    abstract protected function doClone(mixed $var): array;
    /**
     * Casts an object to an array representation.
     *
     * @param bool $isNested True if the object is nested in the dumped structure
     */
    protected function castObject(Stub $stub, bool $isNested): array
    {
        $obj = $stub->value;
        $class = $stub->class;
        if (str_contains($class, "@anonymous\x00")) {
            $stub->class = get_debug_type($obj);
        }
        if (isset($this->classInfo[$class])) {
            [$i, $parents, $hasDebugInfo, $fileInfo] = $this->classInfo[$class];
        } else {
            $i = 2;
            $parents = [$class];
            $hasDebugInfo = method_exists($class, '__debugInfo');
            foreach (class_parents($class) as $p) {
                $parents[] = $p;
                ++$i;
            }
            foreach (class_implements($class) as $p) {
                $parents[] = $p;
                ++$i;
            }
            $parents[] = '*';
            $r = new \ReflectionClass($class);
            $fileInfo = ($r->isInternal() || $r->isSubclassOf(Stub::class)) ? [] : ['file' => $r->getFileName(), 'line' => $r->getStartLine()];
            $this->classInfo[$class] = [$i, $parents, $hasDebugInfo, $fileInfo];
        }
        $stub->attr += $fileInfo;
        $a = Caster::castObject($obj, $class, $hasDebugInfo, $stub->class);
        try {
            while ($i--) {
                if (!empty($this->casters[$p = $parents[$i]])) {
                    foreach ($this->casters[$p] as $callback) {
                        $a = $callback($obj, $a, $stub, $isNested, $this->filter);
                    }
                }
            }
        } catch (\Exception $e) {
            $a = [((Stub::TYPE_OBJECT === $stub->type) ? Caster::PREFIX_VIRTUAL : '') . '⚠' => new ThrowingCasterException($e)] + $a;
        }
        return $a;
    }
    /**
     * Casts a resource to an array representation.
     *
     * @param bool $isNested True if the object is nested in the dumped structure
     */
    protected function castResource(Stub $stub, bool $isNested): array
    {
        $a = [];
        $res = $stub->value;
        $type = $stub->class;
        try {
            if (!empty($this->casters[':' . $type])) {
                foreach ($this->casters[':' . $type] as $callback) {
                    $a = $callback($res, $a, $stub, $isNested, $this->filter);
                }
            }
        } catch (\Exception $e) {
            $a = [((Stub::TYPE_OBJECT === $stub->type) ? Caster::PREFIX_VIRTUAL : '') . '⚠' => new ThrowingCasterException($e)] + $a;
        }
        return $a;
    }
}
