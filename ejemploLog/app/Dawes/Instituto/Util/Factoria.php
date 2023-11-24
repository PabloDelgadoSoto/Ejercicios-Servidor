<?php
    namespace Dawes\Instituto\Util;
    require 'vendor/autoload.php';

    use Monolog\Handler\StreamHandler;
    use Monolog\Logger;
    use Psr\Log\LoggerInterface;
    use Dawes\Instituto\Model\Alumno;

    use Monolog\Formatter\HtmlFormatter;
    use Monolog\Processor\WebProcessor;
    use Monolog\Handler\RotatingFileHandler;

    class Factoria {

        const FICHERO = "log/ficheroLog.log";
        const CANAL = "miApp";
        const AGREGADO = "Alumno agregado: ";

        public static function getLogger(string $canal = Factoria::CANAL) : LoggerInterface{
            $log = new Logger($canal);
            $html = new RotatingFileHandler(Factoria::FICHERO, Logger::DEBUG);
            $log->pushHandler($html);
            $html->setFormatter(new HtmlFormatter());
            $log->pushProcessor(new WebProcessor());
            return $log;
        }
    }