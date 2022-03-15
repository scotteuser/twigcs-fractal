<?php

namespace ScottEuser\FractalTwigcs\Ruleset;

use ScottEuser\FractalTwigcs\Rule\FractalUnusedVariable;
use FriendsOfTwig\Twigcs\Rule\UnusedVariable;
use FriendsOfTwig\Twigcs\Ruleset\Official;
use FriendsOfTwig\Twigcs\Validator\Violation;

/**
 * Fractal ruleset extending official.
 *
 * UnusedVariable otherwise ignores variable usage with the `render`
 * tag provided by Fractal.
 */
class Fractal extends Official
{

    /**
     * {@inheritdoc}
     */
    public function getRules()
    {
        $rules = parent::getRules();
        foreach ($rules as $key => $rule) {
          if ($rule instanceof UnusedVariable) {
            $rules[$key] = new FractalUnusedVariable(Violation::SEVERITY_WARNING);
            break;
          }
        }
        return $rules;
    }
}
