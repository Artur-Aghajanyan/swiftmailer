<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita10bb145ffe9bb256e0ead9860139bfd
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '25072dd6e2470089de65ae7bf11d3109' => __DIR__ . '/..' . '/symfony/polyfill-php72/bootstrap.php',
        'f598d06aa772fa33d905e87be6398fb1' => __DIR__ . '/..' . '/symfony/polyfill-intl-idn/bootstrap.php',
        'def43f6c87e4f8dfd0c9e1b1bab14fe8' => __DIR__ . '/..' . '/symfony/polyfill-iconv/bootstrap.php',
        '2c102faa651ef8ea5874edb585946bce' => __DIR__ . '/..' . '/swiftmailer/swiftmailer/lib/swift_required.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Php72\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Intl\\Idn\\' => 26,
            'Symfony\\Polyfill\\Iconv\\' => 23,
        ),
        'E' => 
        array (
            'Egulias\\EmailValidator\\' => 23,
        ),
        'D' => 
        array (
            'Doctrine\\Common\\Lexer\\' => 22,
        ),
        'C' => 
        array (
            'Classes\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Php72\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php72',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Intl\\Idn\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-intl-idn',
        ),
        'Symfony\\Polyfill\\Iconv\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-iconv',
        ),
        'Egulias\\EmailValidator\\' => 
        array (
            0 => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator',
        ),
        'Doctrine\\Common\\Lexer\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/lexer/lib/Doctrine/Common/Lexer',
        ),
        'Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Classes',
        ),
    );

    public static $classMap = array (
        'Classes\\Mailer\\Mail' => __DIR__ . '/../..' . '/Classes/Classes.php',
        'Classes\\Users\\User' => __DIR__ . '/../..' . '/Classes/Classes.php',
        'Doctrine\\Common\\Lexer\\AbstractLexer' => __DIR__ . '/..' . '/doctrine/lexer/lib/Doctrine/Common/Lexer/AbstractLexer.php',
        'Egulias\\EmailValidator\\EmailLexer' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/EmailLexer.php',
        'Egulias\\EmailValidator\\EmailParser' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/EmailParser.php',
        'Egulias\\EmailValidator\\EmailValidator' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/EmailValidator.php',
        'Egulias\\EmailValidator\\Exception\\AtextAfterCFWS' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Exception/AtextAfterCFWS.php',
        'Egulias\\EmailValidator\\Exception\\CRLFAtTheEnd' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Exception/CRLFAtTheEnd.php',
        'Egulias\\EmailValidator\\Exception\\CRLFX2' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Exception/CRLFX2.php',
        'Egulias\\EmailValidator\\Exception\\CRNoLF' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Exception/CRNoLF.php',
        'Egulias\\EmailValidator\\Exception\\CharNotAllowed' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Exception/CharNotAllowed.php',
        'Egulias\\EmailValidator\\Exception\\CommaInDomain' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Exception/CommaInDomain.php',
        'Egulias\\EmailValidator\\Exception\\ConsecutiveAt' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Exception/ConsecutiveAt.php',
        'Egulias\\EmailValidator\\Exception\\ConsecutiveDot' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Exception/ConsecutiveDot.php',
        'Egulias\\EmailValidator\\Exception\\DomainHyphened' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Exception/DomainHyphened.php',
        'Egulias\\EmailValidator\\Exception\\DotAtEnd' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Exception/DotAtEnd.php',
        'Egulias\\EmailValidator\\Exception\\DotAtStart' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Exception/DotAtStart.php',
        'Egulias\\EmailValidator\\Exception\\ExpectingAT' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Exception/ExpectingAT.php',
        'Egulias\\EmailValidator\\Exception\\ExpectingATEXT' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Exception/ExpectingATEXT.php',
        'Egulias\\EmailValidator\\Exception\\ExpectingCTEXT' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Exception/ExpectingCTEXT.php',
        'Egulias\\EmailValidator\\Exception\\ExpectingDTEXT' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Exception/ExpectingDTEXT.php',
        'Egulias\\EmailValidator\\Exception\\ExpectingDomainLiteralClose' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Exception/ExpectingDomainLiteralClose.php',
        'Egulias\\EmailValidator\\Exception\\ExpectingQPair' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Exception/ExpectingQPair.php',
        'Egulias\\EmailValidator\\Exception\\InvalidEmail' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Exception/InvalidEmail.php',
        'Egulias\\EmailValidator\\Exception\\NoDNSRecord' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Exception/NoDNSRecord.php',
        'Egulias\\EmailValidator\\Exception\\NoDomainPart' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Exception/NoDomainPart.php',
        'Egulias\\EmailValidator\\Exception\\NoLocalPart' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Exception/NoLocalPart.php',
        'Egulias\\EmailValidator\\Exception\\UnclosedComment' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Exception/UnclosedComment.php',
        'Egulias\\EmailValidator\\Exception\\UnclosedQuotedString' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Exception/UnclosedQuotedString.php',
        'Egulias\\EmailValidator\\Exception\\UnopenedComment' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Exception/UnopenedComment.php',
        'Egulias\\EmailValidator\\Parser\\DomainPart' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Parser/DomainPart.php',
        'Egulias\\EmailValidator\\Parser\\LocalPart' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Parser/LocalPart.php',
        'Egulias\\EmailValidator\\Parser\\Parser' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Parser/Parser.php',
        'Egulias\\EmailValidator\\Validation\\DNSCheckValidation' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Validation/DNSCheckValidation.php',
        'Egulias\\EmailValidator\\Validation\\EmailValidation' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Validation/EmailValidation.php',
        'Egulias\\EmailValidator\\Validation\\Error\\RFCWarnings' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Validation/Error/RFCWarnings.php',
        'Egulias\\EmailValidator\\Validation\\Error\\SpoofEmail' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Validation/Error/SpoofEmail.php',
        'Egulias\\EmailValidator\\Validation\\Exception\\EmptyValidationList' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Validation/Exception/EmptyValidationList.php',
        'Egulias\\EmailValidator\\Validation\\MultipleErrors' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Validation/MultipleErrors.php',
        'Egulias\\EmailValidator\\Validation\\MultipleValidationWithAnd' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Validation/MultipleValidationWithAnd.php',
        'Egulias\\EmailValidator\\Validation\\NoRFCWarningsValidation' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Validation/NoRFCWarningsValidation.php',
        'Egulias\\EmailValidator\\Validation\\RFCValidation' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Validation/RFCValidation.php',
        'Egulias\\EmailValidator\\Validation\\SpoofCheckValidation' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Validation/SpoofCheckValidation.php',
        'Egulias\\EmailValidator\\Warning\\AddressLiteral' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Warning/AddressLiteral.php',
        'Egulias\\EmailValidator\\Warning\\CFWSNearAt' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Warning/CFWSNearAt.php',
        'Egulias\\EmailValidator\\Warning\\CFWSWithFWS' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Warning/CFWSWithFWS.php',
        'Egulias\\EmailValidator\\Warning\\Comment' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Warning/Comment.php',
        'Egulias\\EmailValidator\\Warning\\DeprecatedComment' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Warning/DeprecatedComment.php',
        'Egulias\\EmailValidator\\Warning\\DomainLiteral' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Warning/DomainLiteral.php',
        'Egulias\\EmailValidator\\Warning\\DomainTooLong' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Warning/DomainTooLong.php',
        'Egulias\\EmailValidator\\Warning\\EmailTooLong' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Warning/EmailTooLong.php',
        'Egulias\\EmailValidator\\Warning\\IPV6BadChar' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Warning/IPV6BadChar.php',
        'Egulias\\EmailValidator\\Warning\\IPV6ColonEnd' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Warning/IPV6ColonEnd.php',
        'Egulias\\EmailValidator\\Warning\\IPV6ColonStart' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Warning/IPV6ColonStart.php',
        'Egulias\\EmailValidator\\Warning\\IPV6Deprecated' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Warning/IPV6Deprecated.php',
        'Egulias\\EmailValidator\\Warning\\IPV6DoubleColon' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Warning/IPV6DoubleColon.php',
        'Egulias\\EmailValidator\\Warning\\IPV6GroupCount' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Warning/IPV6GroupCount.php',
        'Egulias\\EmailValidator\\Warning\\IPV6MaxGroups' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Warning/IPV6MaxGroups.php',
        'Egulias\\EmailValidator\\Warning\\LabelTooLong' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Warning/LabelTooLong.php',
        'Egulias\\EmailValidator\\Warning\\LocalTooLong' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Warning/LocalTooLong.php',
        'Egulias\\EmailValidator\\Warning\\NoDNSMXRecord' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Warning/NoDNSMXRecord.php',
        'Egulias\\EmailValidator\\Warning\\ObsoleteDTEXT' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Warning/ObsoleteDTEXT.php',
        'Egulias\\EmailValidator\\Warning\\QuotedPart' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Warning/QuotedPart.php',
        'Egulias\\EmailValidator\\Warning\\QuotedString' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Warning/QuotedString.php',
        'Egulias\\EmailValidator\\Warning\\TLD' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Warning/TLD.php',
        'Egulias\\EmailValidator\\Warning\\Warning' => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator/Warning/Warning.php',
        'Symfony\\Polyfill\\Iconv\\Iconv' => __DIR__ . '/..' . '/symfony/polyfill-iconv/Iconv.php',
        'Symfony\\Polyfill\\Intl\\Idn\\Idn' => __DIR__ . '/..' . '/symfony/polyfill-intl-idn/Idn.php',
        'Symfony\\Polyfill\\Mbstring\\Mbstring' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/Mbstring.php',
        'Symfony\\Polyfill\\Php72\\Php72' => __DIR__ . '/..' . '/symfony/polyfill-php72/Php72.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita10bb145ffe9bb256e0ead9860139bfd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita10bb145ffe9bb256e0ead9860139bfd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita10bb145ffe9bb256e0ead9860139bfd::$classMap;

        }, null, ClassLoader::class);
    }
}
