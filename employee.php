
<?php

/**
 * Employee Class
 */
class Employee
{

    /* Properties */
    private $first_name;
    private $last_name;
    private $dob;
    private $gross_income;
    


    /* Constructor Method */
    public function __construct ( $first_name, $last_name, $dob,$gross_income ) {
        $this->set_first_name( $first_name );
        $this->set_last_name( $last_name );
        $this->set_dob( $dob );
        $this->set_gross_income($gross_income);
    }


    /* Methods */
    /* Setters */
    public function set_first_name ( $first_name ) {
        $this->first_name = $first_name;
    }

    public function set_last_name ( $last_name ) {
        $this->last_name = $last_name;
    }

    public function set_dob ( $dob ) {
        $this->dob = $dob;
    }

    public function set_gross_income ( $gross_income ) {
        $this->gross_income = $gross_income;
    }


    /* Getters */
    public function get_first_name () {
        return $this->first_name;
    }

    public function get_last_name () {
        return $this->last_name;
    }

    public function get_dob () {
        return $this->dob;
    }

    public function get_gross_income () {
        return $this->gross_income;
    }

    /*public function get_person_info () {
        return [
            'first_name' => $this->get_first_name(),
            'last_name' => $this->get_last_name(),
            'dob' => $this->get_dob()
        ];
    }*/
    
    /* Function to calculate the age of the employee*/
    public function age ( $date = null ) {

        $dob = new DateTime( $this->dob );
        $current = is_null( $date ) ? new DateTime : new DateTime( $date );
        $diff = $dob->diff( $current );
        return $diff->format( '%Y' );
    }
    /* Function to calculate the net income of the employee*/
    /* 0.26=0.08+0.07+0.11(total of deductions)*/
    public function net_income(){

        $gross_income =0;
        $net_income = $gross_income-($gross_income*0.26);
    }

}
?>
