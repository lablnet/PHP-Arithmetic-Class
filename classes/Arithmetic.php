<?php
/**
 * PHP Arithmetic class.
 *
 * @author   Malik Umer Farooq <lablnet01@gmail.com>
 * @author-profile https://www.facebook.com/malikumerfarooq01/
 *
 * @license MIT
 *
 * @link    https://github.com/Lablnet/PHP-Arithmetic-Class
 */
class Arithmetic
{
    /**
     * For storing number in array.
     */
    private static $nums = [];
    /**
     * For setting number in array.
     */
    private static $values;

    /**
     * Unset the values.
     *
     * @return void
     */
    public function __destruct()
    {
        unset(self::$nums);
        unset(self::$nums);
    }

    /**
     * Set value for calculation.
     *
     * @param  $value value seperated by comma
     *
     * @return void
     */
    private static function SetValues($values)
    {
        self::$values = $values;

        self::Numbers();
    }

    /**
     * Explod the numbers into array.
     *
     * @return void
     */
    private static function Numbers()
    {
        self::$nums = explode(',', self::$values);
    }

    /**
     * Perform addition operation.
     *
     * @return int | float
     */
    public static function Addition()
    {
        if (isset(self::$nums) && !empty(self::$nums)) {
            $answer = 0;

            foreach (self::$nums as $key => $value) {
                if (is_numeric($value)) {
                    $answer += $value;
                }
            }

            if (isset($answer) && !empty($answer)) {
                return $answer;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    /**
     * Perform substraction operation.
     *
     * @return int | float
     */
    public static function Substraction()
    {
        if (isset(self::$nums) && !empty(self::$nums)) {
            $nums = self::$nums;

            $answer = current($nums);

            $key = key($nums);

            unset($nums[$key]);

            foreach ($nums as $key => $value) {
                if (is_numeric($value)) {
                    $answer -= $value;
                }
            }

            if (isset($answer) && !empty($answer)) {
                return $answer;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    /**
     * Perform multiplication operation.
     *
     * @return int | float
     */
    public static function Multiplication()
    {
        if (isset(self::$nums) && !empty(self::$nums)) {
            $answer = 1;

            foreach (self::$nums as $key => $value) {
                if (is_numeric($value)) {
                    $answer *= $value;
                }
            }

            if (isset($answer) && !empty($answer)) {
                return $answer;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    /**
     * Perform division operation.
     *
     * @return int | float
     */
    public static function Division()
    {
        if (isset(self::$nums) && !empty(self::$nums)) {
            $nums = self::$nums;

            $answer = current($nums);

            $key = key($nums);

            unset($nums[$key]);

            foreach ($nums as $key => $value) {
                if (is_numeric($value)) {
                    $answer /= $value;
                }
            }

            if (isset($answer) && !empty($answer)) {
                return $answer;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    /**
     * Perform average operation.
     *
     * @return int | float
     */
    public static function Average()
    {
        if (isset(self::$nums) && !empty(self::$nums)) {
            $add = self::Addition(self::$nums);

            if (isset($add) && !empty($add)) {
                $total_number = count(self::$nums);

                $average = $add / $total_number;

                return $average;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    /**
     * Calculate the result.
     *
     * @param $value=> the value to-be process
     * $type  = like addition,multiplication
     *
     * @return int | float
     */
    public static function Calculate($value, $type)
    {
        self::SetValues($value);

        switch ($type) {

            case 'addition':

                return self::Addition();

                break;

            case 'substraction':

                return self::Substraction();

                break;

            case 'multiplication':

                return self::Multiplication();

                break;

            case 'division':

                return self::Division();

                break;

            case 'average':

                return self::Average();

                break;
            default:

                return false;

                break;

        }
    }
}
