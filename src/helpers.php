<?php

namespace Src\Validator;

function validator(array $fields, array $rules, array $messages = []): Validator
{
    return new Validator($fields, $rules, $messages);
}
