<?php
// Contact API Data Structure //
$contact_data = array(
    'system' => array(
        'users' => array(
            'id' => array(
                'id' => '', // System ID of the user
                'first_name' => '', // Self Explanatory
                'middle_name' => '', // Self Explanatory
                'last_name' => '', // Self Explanatory
                'username' => '', // Self Explanatory
                'titronics_username' => '', // Self Explanatory
                'groups' => array(), // Array of User Group ID's
                'linked_provider_id' => array(), // Array of Linked Provider ID's
                'status' => '' // Active or Inactive
            )
        ),
        'clinics' => array(
            'id' => array(
                'id' => '', // Self Explanatory
                'name' => '', // Self Explanatory
                'street_address' => '', // Self Explanatory
                'city' => '', // Self Explanatory
                'state' => '', // Self Explanatory
                'zip' => '', // Self Explanatory
                'phone' => '', // Self Explanatory
                'fax' => '', // Self Explanatory
                'clinic_email' => '', // Self Explanatory
                'website' => '', // Self Explanatory
                'status' => '' // Active or Inactive
            )
        ),
        'groups' => array(
            'id' => array(
                'id' => '', // Self Explanatory
                'name' => '', // Self Explanatory
                'access_privileges' => array(
                    'billing' => '',
                    'main' => '',
                    'practice_dx' => '',
                    'reporting' => ''
                ) // Boolean of the access options for the group. 
            )
        ),
        'providers' => array(
            'id' => array(
                'id' => '', // Self Explantory
                'name' => '', // Self Explanatory
                'cell' => '', // Self Explanatory
                'fax' => '', // Self Explanatory
                'email' => '', // Self Explanatory
                'linked_user_id' => '' // Linked System User ID
            )
        )
    ),
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
            'new_patient_date' => '', //  MYSQL Timestamp This is the date when the second of use of the pre-defined CPT code group. This IS NOT the "New Patient" data field in the pateint tab.
            'next_appointment_date' => '', // MYSQL Timestamp Self Explanatory
            'last_completed_appointment_date' => '', // MYSQL Timestamp Self Explanatory
            'contact_status' => '', // Active, Inactive, Terminated
            'contact_class' => '', // Prospect, Lead, Patient
            'general_source' => '',
            'referrer_contact_id' => '', // The contact ID of the contact that referred this contact is available
            'referral_source_type' => '', // Internal or External
            'referral_source_type_admin' => '', // The custom admin label placed within each of the referral sources to be able to group referral sources.
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
            'secondary_insurance_company' => '', // Self Explanatory
            'tertairy_insurance_company' => '', // Self Explanatory
            'last_updated' => '', // MYSQL Timestamp
            'last_updated_user_id' => '' // User ID of the last system user to update the contact record
            // Timestamp of the last update time from VitaLogics
        ),
        'appointments' => array(
            // Will have an entry for each appointment. This should loop through each of the contacts appointments and add them as an 			additional array entry.
            'id' => array(
                'id' => '', // Database ID of Appointment in VitaLogics
                'case_id' => '', // Linked Case ID for payment
                'color' => '', // HEX color code (Reason of Visit) of schedule appointment
                'treating_provider' => '', // Treating Provider Information
                'assigned_provider' => '', // Assigned Provider of Contact at Creation
                'duration' => '', // Length of appointment time in minutes
                'room' => '', // Associated Room
                'clinic_id' => '', // Associated Clinic Name where the appointment was scheduled NOT the assigned_clinic_name from the patient tab.
                'clinic_name' => '', // Associated Clinic ID where the appointment was scheduled NOT the assigned_clinic_id from the patient tab
                'date_created' => '', // Timestamp of entry to DB
                'last_updated' => '', // Last updated timestamp to DB
                'last_updated_user_id' => '', // System User ID of the user to update the appointment.
                'scheduled_date' => '', // Timestamp of the appointment schedule date
                'walk_in' => '', // Boolean walkin check box
                'appointment_status' => '', // Arrived, Cancelled, Complete, Confirmed, In Session, Rescheduled, ETC
                'icd_codes' => '', // Comma separated list of ICD Codes
                'icd_description' => '', // Comma separated list of ICD Description
                'reason_for_visit' => '', // Adjustment, New Patient, ROF, etc.
                'linked_appointment_notes' => '' // Comma Separated or Sub Array of General Notes Need to find out on full not or not.
            )
        ),
        'charges' => array(
            'id' => array(
                'id' => '', // DB id of the charge
                'billing_provider' => '', // Self Explanatory
                'treating_provider' => '', // Self Explanatory
                'appointment_id' => '', // Linked appointment to charge
                'clinic_id' => '', // Clinic ID of where the charge was created. This is NOT the assigned_clinic_id from the Patient Tab
                'case_id' => '', // Linked Case ID for payment
                'charge_code' => '', // CPT Codes
                'charge_code_group' => '', // CPT code group Admin label - Need to add
                'charge_description' => '', // Open description of charge
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
                'manual_writeoffs' => '', // This is both line item write offs done in the ledger or in the EOB posting module and any bulk write offs.
                'total_writeoffs' => '', // Combination of Manual and Fee Schedule Writeoffs
                'insurance_fee_schedule_amount' => '', // Self Explanatory
                'total_billed' => '', // Self Explanatory
                'charge_price' => '', // Price of charge from Price List
                'last_updated' => '', // MYSQL Timestamp of last time the charge was updated. 
                'last_updated_user_id' => '', // System User ID of the user to update the charge.
				'is_deleted' => '', //  Boolean if Charge has been deleted in system or not
            )
        ),
        'payments' => array(
            // For each payment you will have a new entry on this array
            'id' => array(
                'id' => '',
                'charge_id' => '', // Linked charge ID
                'charge_description' => '', // Comments from the payment
                'case_id' => '', // Linked Case ID for payment
                'amount' => '', // Amount of the payment
                'payment_type' => '', // Patient or Payer
                'credit_type' => '', // Credit Card, Cash, Check
                'date_created' => '', // Date payment was added
                'posted_by' => '', // Person who posted the payment
                'last_updated' => '', // MYSQL Timestamp of the last update made to payment
                'last_update_user_id' => '', // // System User ID of the user to update the payment.
				'is_deleted' => '', //  Boolean if Payment has been deleted in system or not
            )
        ),
        'cases' => array( 
            'id' => array(
                'id' => '',
                'date_created' => '',
                'type' => '', // Cash, Barter, TOS
                'case_status' => '', // Pending, Active, Closed
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
                'patient_case_balance' => '', // Self Explanatory
                'payer_case_balance' => '', // Self Explanatory
                'last_updated' => '', // MYSQL Timestamp of the last time the case was updated.
                'last_updated_user_id' => '' // System User ID of the user to last update the case.
            )
        )
    )
);
echo '<pre>';
echo 'JSON Format<br>';
print_r(json_encode($contact_data, JSON_PRETTY_PRINT));
echo '</pre>';
echo '<pre>';
echo '<br>Array Format<br>';
print_r($contact_data);
echo '</pre>';
?>
JSON Format
{
    "system": {
        "users": {
            "id": {
                "id": "",
                "first_name": "",
                "middle_name": "",
                "last_name": "",
                "username": "",
                "titronics_username": "",
                "groups": [],
                "linked_provider_id": [],
                "status": ""
            }
        },
        "clinics": {
            "id": {
                "id": "",
                "name": "",
                "street_address": "",
                "city": "",
                "state": "",
                "zip": "",
                "phone": "",
                "fax": "",
                "clinic_email": "",
                "website": "",
                "status": ""
            }
        },
        "groups": {
            "id": {
                "id": "",
                "name": "",
                "access_privileges": {
                    "billing": "",
                    "main": "",
                    "practice_dx": "",
                    "reporting": ""
                }
            }
        },
        "providers": {
            "id": {
                "id": "",
                "name": "",
                "cell": "",
                "fax": "",
                "email": "",
                "linked_user_id": ""
            }
        }
    },
    "contact": {
        "general": {
            "id": "",
            "vl_db_id": "",
            "first_name": "",
            "middle_name": "",
            "last_name": "",
            "gender": "",
            "title": "",
            "nick_name": "",
            "spouse": "",
            "email": "",
            "billing_address_1": "",
            "billing_address_2": "",
            "billing_city": "",
            "billing_state": "",
            "billing_zip": "",
            "home_phone": "",
            "cell_phone": "",
            "cell_carrier": "",
            "work_phone": "",
            "birthday": "",
            "occupation": "",
            "new_prospect_date": "",
            "new_lead_date": "",
            "new_patient_date": "",
            "next_appointment_date": "",
            "last_completed_appointment_date": "",
            "contact_status": "",
            "contact_class": "",
            "general_source": "",
            "referrer_contact_id": "",
            "referral_source_type": "",
            "referral_source_type_admin": "",
            "initial_condition": "",
            "major_condition": "",
            "assigned_clinic_provider_title": "",
            "assigned_clinic_provider_first_name": "",
            "assigned_clinic_provider_last_name": "",
            "assigned_clinic_business_name": "",
            "assigned_clinic_website": "",
            "assigned_clinic_address": "",
            "assigned_clinic_city": "",
            "assigned_clinic_state": "",
            "primary_insurance_company": "",
            "secondary_insurance_company": "",
            "tertairy_insurance_company": "",
            "last_updated": "",
            "last_updated_user_id": ""
        },
        "appointments": {
            "id": {
                "id": "",
                "case_id": "",
                "color": "",
                "treating_provider": "",
                "assigned_provider": "",
                "duration": "",
                "room": "",
                "clinic_id": "",
                "clinic_name": "",
                "date_created": "",
                "last_updated": "",
                "last_updated_user_id": "",
                "scheduled_date": "",
                "walk_in": "",
                "appointment_status": "",
                "icd_codes": "",
                "icd_description": "",
                "reason_for_visit": "",
                "linked_appointment_notes": ""
            }
        },
        "charges": {
            "id": {
                "id": "",
                "billing_provider": "",
                "treating_provider": "",
                "appointment_id": "",
                "clinic_id": "",
                "case_id": "",
                "charge_code": "",
                "charge_code_group": "",
                "charge_description": "",
                "units": "",
                "date_created": "",
                "total_balance_owed": "",
                "patient_amount_owed": "",
                "insurance_amount_owed": "",
                "insurance_paid_total": "",
                "insurance_1_paid": "",
                "insurance_2_paid": "",
                "insurance_3_paid": "",
                "patient_paid_total": "",
                "fee_schedule_writeoffs": "",
                "manual_writeoffs": "",
                "total_writeoffs": "",
                "insurance_fee_schedule_amount": "",
                "total_billed": "",
                "charge_price": "",
                "last_updated": "",
                "last_updated_user_id": "",
                "is_deleted": ""
            }
        },
        "payments": {
            "id": {
                "id": "",
                "charge_id": "",
                "charge_description": "",
                "case_id": "",
                "amount": "",
                "payment_type": "",
                "credit_type": "",
                "date_created": "",
                "posted_by": "",
                "last_updated": "",
                "last_update_user_id": "",
                "is_deleted": ""
            }
        },
        "cases": {
            "id": {
                "id": "",
                "date_created": "",
                "type": "",
                "case_status": "",
                "price_list": "",
                "releases": {
                    "medical_info": "",
                    "hippa": "",
                    "treament": "",
                    "lien": ""
                },
                "reminders": {
                    "text": "",
                    "email": ""
                },
                "attorney": "",
                "referring_provider": "",
                "designated_provider": "",
                "billing_provider": "",
                "contact_id": "",
                "patient_case_balance": "",
                "payer_case_balance": "",
                "last_updated": "",
                "last_updated_user_id": ""
            }
        }
    }
}
Array Format
Array
(
    [system] => Array
        (
            [users] => Array
                (
                    [id] => Array
                        (
                            [id] => 
                            [first_name] => 
                            [middle_name] => 
                            [last_name] => 
                            [username] => 
                            [titronics_username] => 
                            [groups] => Array
                                (
                                )

                            [linked_provider_id] => Array
                                (
                                )

                            [status] => 
                        )

                )

            [clinics] => Array
                (
                    [id] => Array
                        (
                            [id] => 
                            [name] => 
                            [street_address] => 
                            [city] => 
                            [state] => 
                            [zip] => 
                            [phone] => 
                            [fax] => 
                            [clinic_email] => 
                            [website] => 
                            [status] => 
                        )

                )

            [groups] => Array
                (
                    [id] => Array
                        (
                            [id] => 
                            [name] => 
                            [access_privileges] => Array
                                (
                                    [billing] => 
                                    [main] => 
                                    [practice_dx] => 
                                    [reporting] => 
                                )

                        )

                )

            [providers] => Array
                (
                    [id] => Array
                        (
                            [id] => 
                            [name] => 
                            [cell] => 
                            [fax] => 
                            [email] => 
                            [linked_user_id] => 
                        )

                )

        )

    [contact] => Array
        (
            [general] => Array
                (
                    [id] => 
                    [vl_db_id] => 
                    [first_name] => 
                    [middle_name] => 
                    [last_name] => 
                    [gender] => 
                    [title] => 
                    [nick_name] => 
                    [spouse] => 
                    [email] => 
                    [billing_address_1] => 
                    [billing_address_2] => 
                    [billing_city] => 
                    [billing_state] => 
                    [billing_zip] => 
                    [home_phone] => 
                    [cell_phone] => 
                    [cell_carrier] => 
                    [work_phone] => 
                    [birthday] => 
                    [occupation] => 
                    [new_prospect_date] => 
                    [new_lead_date] => 
                    [new_patient_date] => 
                    [next_appointment_date] => 
                    [last_completed_appointment_date] => 
                    [contact_status] => 
                    [contact_class] => 
                    [general_source] => 
                    [referrer_contact_id] => 
                    [referral_source_type] => 
                    [referral_source_type_admin] => 
                    [initial_condition] => 
                    [major_condition] => 
                    [assigned_clinic_provider_title] => 
                    [assigned_clinic_provider_first_name] => 
                    [assigned_clinic_provider_last_name] => 
                    [assigned_clinic_business_name] => 
                    [assigned_clinic_website] => 
                    [assigned_clinic_address] => 
                    [assigned_clinic_city] => 
                    [assigned_clinic_state] => 
                    [primary_insurance_company] => 
                    [secondary_insurance_company] => 
                    [tertairy_insurance_company] => 
                    [last_updated] => 
                    [last_updated_user_id] => 
                )

            [appointments] => Array
                (
                    [id] => Array
                        (
                            [id] => 
                            [case_id] => 
                            [color] => 
                            [treating_provider] => 
                            [assigned_provider] => 
                            [duration] => 
                            [room] => 
                            [clinic_id] => 
                            [clinic_name] => 
                            [date_created] => 
                            [last_updated] => 
                            [last_updated_user_id] => 
                            [scheduled_date] => 
                            [walk_in] => 
                            [appointment_status] => 
                            [icd_codes] => 
                            [icd_description] => 
                            [reason_for_visit] => 
                            [linked_appointment_notes] => 
                        )

                )

            [charges] => Array
                (
                    [id] => Array
                        (
                            [id] => 
                            [billing_provider] => 
                            [treating_provider] => 
                            [appointment_id] => 
                            [clinic_id] => 
                            [case_id] => 
                            [charge_code] => 
                            [charge_code_group] => 
                            [charge_description] => 
                            [units] => 
                            [date_created] => 
                            [total_balance_owed] => 
                            [patient_amount_owed] => 
                            [insurance_amount_owed] => 
                            [insurance_paid_total] => 
                            [insurance_1_paid] => 
                            [insurance_2_paid] => 
                            [insurance_3_paid] => 
                            [patient_paid_total] => 
                            [fee_schedule_writeoffs] => 
                            [manual_writeoffs] => 
                            [total_writeoffs] => 
                            [insurance_fee_schedule_amount] => 
                            [total_billed] => 
                            [charge_price] => 
                            [last_updated] => 
                            [last_updated_user_id] => 
                            [is_deleted] => 
                        )

                )

            [payments] => Array
                (
                    [id] => Array
                        (
                            [id] => 
                            [charge_id] => 
                            [charge_description] => 
                            [case_id] => 
                            [amount] => 
                            [payment_type] => 
                            [credit_type] => 
                            [date_created] => 
                            [posted_by] => 
                            [last_updated] => 
                            [last_update_user_id] => 
                            [is_deleted] => 
                        )

                )

            [cases] => Array
                (
                    [id] => Array
                        (
                            [id] => 
                            [date_created] => 
                            [type] => 
                            [case_status] => 
                            [price_list] => 
                            [releases] => Array
                                (
                                    [medical_info] => 
                                    [hippa] => 
                                    [treament] => 
                                    [lien] => 
                                )

                            [reminders] => Array
                                (
                                    [text] => 
                                    [email] => 
                                )

                            [attorney] => 
                            [referring_provider] => 
                            [designated_provider] => 
                            [billing_provider] => 
                            [contact_id] => 
                            [patient_case_balance] => 
                            [payer_case_balance] => 
                            [last_updated] => 
                            [last_updated_user_id] => 
                        )

                )

        )

)
