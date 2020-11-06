<?php

namespace BetProject\Enum;


class RabbitTopicsEnum
{
    public const VALIDATOR_RESULTS_TOPIC = "qValidatorResults";
    public const VALIDATOR_SUCCESS_TOPIC = "qValidatorSuccess";
    public const VALIDATOR_ERRORS_TOPIC = "qValidatorErrors";
    public const CALULATOR_TOPIC = "qForks";
    public const PARSER_RESULTS_TOPIC = "qParserResults";
}