<?php
// Contact API Data Structure //
$contact_data = array(
      'contact' => array(
            'general' => array(
                  'id' => '', // ID of the contact
                  'vl_db_id' => '', // DB of the VitaLogics Location
                  'first_name' => '', // Self Explanatory
                  'middle_name' => '', // Self Explanatory
                  'last_name' => '', // Self Explanatory
                  'gender' => '', // Self Explanatory
                  'title' => '', // Self Explanatory
                  'nick_name' => '', // Self Explanatory
                  'spouse' => '', // Self Explanatory
                  'email' => '', // Self Explanatory
                  'billing_address_1' => '', // Self Explanatory
                  'billing_address_2' => '', // Self Explanatory
                  'billing_city' => '', // Self Explanatory
                  'billing_state' => '', // Self Explanatory
                  'billing_zip' => '', // Self Explanatory
                  'home_phone' => '', // Self Explanatory
                  'cell_phone' => '', // Self Explanatory
                  'cell_carrier' => '', // Self Explanatory
                  'work_phone' => '', // Self Explanatory
                  'birthday' => '', // Self Explanatory
                  'occupation' => '', // Self Explanatory
                  'new_prospect_date' => '', //   MYSQL Timestamp Date the Contact was Entered into System
                  'new_lead_date' => '', //   MYSQL Timestamp Date the Contact Completed First of Pre-Defined Appointment
                  'new_patient_date' => '', //  MYSQL Timestamp This is the date when the second of pre-defined 
                  'next_appointment_date' => '', // MYSQL Timestamp Self Explanatory
                  'last_completed_appointment_date' => '', // MYSQL Timestamp Self Explanatory
                  'contact_status' => '', // Active, Inactive, Terminated
                  'contact_class' => '', // Prospect, Lead, Patient
                  'general_source' => '',
                  'referral_source_id' => '',
                  'initial_condition' => '', // Condition FreeText
                  'major_condition' => '', // Condition Dropdown
                  'assigned_clinic_provider_title' => '', // Self Explanatory
                  'assigned_clinic_provider_first_name' => '', // Self Explanatory
                  'assigned_clinic_provider_last_name' => '', // Self Explanatory
                  'assigned_clinic_business_name' => '', // Self Explanatory
                  'assigned_clinic_website' => '', // Self Explanatory
                  'assigned_clinic_address' => '', // Self Explanatory
                  'assigned_clinic_city' => '', // Self Explanatory
                  'assigned_clinic_state' => '', // Self Explanatory
                  'primary_insurance_company' => '', // Self Explanatory
                  'last_updated' => '' // MYSQL Timestamp
                  // Timestamp of the last update time from VitaLogics
            ),
            'appointments' => array(
                  // Will have an entry for each appointment. This should loop through each of the contacts appointments and add them as an 			additional array entry.
                  'id' => array(
                        'id' => '', // Database ID of Appointment in VitaLogics
                        'case_id' => '', // Linked Case ID for payment
                        'color' => '', // HEX color code (Reason of Visit) of schedule appointment
                        'provider' => '', // Assigned Provider Information
                        'duration' => '', // Length of appointment time in minutes
                        'room' => '', // Associated Room
                        'clinic' => '', // Associated Clinic Name
                        'date_created' => '', // Timestamp of entry to DB
                        'last_updated' => '', // Last updated timestamp to DB
                        'scheduled_date' => '', // Timestamp of the appointment schedule date
                        'walk_in' => '', // Boolean walkin check box
                        'status' => '', // Arrived, Cancelled, Complete, Confirmed, In Session, Rescheduled, ETC
                        'icd_codes' => '', // Comma separated list of ICD Codes
                        'reason_for_visit' => '', // Adjustment, New Patient, ROF, etc.
                        'linked_notes' => '' // Comma Separated or Sub Array of General Notes Need to find out on full not or not.
                  )
            ),
            'charges' => array(
                  'id' => array(
                        'id' => '', // DB id of the charge
                        'billing_provider' => '', // Self Explanatory
                        'treating_provider' => '', // Self Explanatory
                        'appointment_id' => '', // Linked appointment to charge
                        'clinic' => '', // Self Explanatory
                        'case_id' => '', // Linked Case ID for payment
                        'charge_code' => '', // CPT Codes
                        'charge_code_group' => '', // CPT code group Admin label - Need to add
                        'description' => '', // Open description of charge
                        'units' => '', // Self Explanatory
                        'date_created' => '', // Self Explanatory
                        'total_balance_owed' => '', // Self Explanatory
                        'patient_amount_owed' => '', // Self Explanatory
                        'insurance_amount_owed' => '', // Self Explanatory
                        'insurance_paid_total' => '', // Self Explanatory
                        'insurance_1_paid' => '', // Primary Insurance Payment Total
                        'insurance_2_paid' => '', // Secondary Insurance
                        'insurance_3_paid' => '',
                        'patient_paid_total' => '',
                        'fee_schedule_writeoffs' => '', // Self Explanatory
                        'manual_writeoffs' => '', // Self Explanatory
                        'total_writeoffs' => '', // Combination of Manual and Fee Schedule Writeoffs
                        'insurance_fee_schedule_amount' => '', // Self Explanatory
                        'total_billed' => '', // Self Explanatory
                        'charge_price' => '' // Price of charge from Price List
                  )
            ),
            'payments' => array(
                  // For each payment you will have a new entry on this array
                  'id' => array(
                        'id' => '',
                        'charge_id' => '', // Linked charge ID
                        'description' => '', // Comments from the payment
                        'case_id' => '', // Linked Case ID for payment
                        'amount' => '', // Amount of the payment
                        'payment_type' => '', // Patient or Payer
                        'credit_type' => '', // Credit Card, Cash, Check
                        'date_created' => '', // Date payment was added
                        'posted_by' => '' // Person who posted the payment
                  )
            ),
            'cases' => array(
                  'id' => array(
                        'id' => '',
                        'date_created' => '',
                        'type' => '', // Cash, Barter, TOS
                        'status' => '', // Pending, Active, Closed
                        'price_list' => '', // depends
                        'releases' => array(
                              'medical_info' => '', // Boolean Self Explanatory
                              'hippa' => '', // Boolean Self Explanatory
                              'treament' => '', // Boolean Self Explanatory
                              'lien' => '' // Boolean Self Explanatory
                        ),
                        'reminders' => array(
                              'text' => '', // Boolean Self Explanatory
                              'email' => '' // Boolean Self Explanatory
                        ),
                        'attorney' => '', // Self Explanatory
                        'referring_provider' => '', // Self Explanatory
                        'designated_provider' => '', // Self Explanatory
                        'billing_provider' => '', // Self Explanatory
                        'contact_id' => '', // Self Explanatory
                        'balance' => '' // Self Explanatory
                  )
            )
      )
);
?>
