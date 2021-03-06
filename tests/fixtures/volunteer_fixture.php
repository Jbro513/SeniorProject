<?php
/* Volunteer Fixture generated on: 2010-04-15 10:04:32 : 1271329172 */
class VolunteerFixture extends CakeTestFixture {
	var $name = 'Volunteer';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'last_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150),
		'first_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150),
		'middle_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150),
		'nickname' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150),
		'current_address' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150),
		'current_city' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150),
		'current_state' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150),
		'current_zip' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 9),
		'current_country' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150),
		'permanent_address' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150),
		'permanent_city' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150),
		'permanent_state' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50),
		'permanent_zip' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 9),
		'permanent_country' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150),
		'passport' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150),
		'passport_country' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150),
		'email' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'last_login' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'referral' => array('type' => 'text', 'null' => false, 'default' => NULL),
		'phone' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 15),
		'gender' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 10),
		'age' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'mobile_phone' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 10),
		'university' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150),
		'university_major' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150),
		'country_of_birth' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150),
		'country_of_residence' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150),
		'citizenship' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150),
		'alternate_email' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150),
		'primary_emergency_contact' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150),
		'primary_emergency_relationship' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150),
		'primary_emergency_phone' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 15),
		'primary_emergency_email' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150),
		'secondary_emergency_contact' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150),
		'secondary_emergency_relationship' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150),
		'secondary_emergency_phone' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 15),
		'secondary_emergency_email' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150),
		'grade_level' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150),
		'medical_conditions' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150),
		'medical_condition_comments' => array('type' => 'text', 'null' => false, 'default' => NULL),
		'allergies' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150),
		'allergies_comments' => array('type' => 'text', 'null' => false, 'default' => NULL),
		'hospitalization' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150),
		'hospitalization_comments' => array('type' => 'text', 'null' => false, 'default' => NULL),
		'prescription_medication' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150),
		'prescription_medication_comments' => array('type' => 'text', 'null' => false, 'default' => NULL),
		'diet' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150),
		'diet_comments' => array('type' => 'text', 'null' => false, 'default' => NULL),
		'shirt_size' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50),
		'date_summer' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'date_fall' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'hobbies' => array('type' => 'text', 'null' => false, 'default' => NULL),
		'project_preference' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 200),
		'interests' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'last_name' => 'Lorem ipsum dolor sit amet',
			'first_name' => 'Lorem ipsum dolor sit amet',
			'middle_name' => 'Lorem ipsum dolor sit amet',
			'nickname' => 'Lorem ipsum dolor sit amet',
			'current_address' => 'Lorem ipsum dolor sit amet',
			'current_city' => 'Lorem ipsum dolor sit amet',
			'current_state' => 'Lorem ipsum dolor sit amet',
			'current_zip' => 'Lorem i',
			'current_country' => 'Lorem ipsum dolor sit amet',
			'permanent_address' => 'Lorem ipsum dolor sit amet',
			'permanent_city' => 'Lorem ipsum dolor sit amet',
			'permanent_state' => 'Lorem ipsum dolor sit amet',
			'permanent_zip' => 'Lorem i',
			'permanent_country' => 'Lorem ipsum dolor sit amet',
			'passport' => 'Lorem ipsum dolor sit amet',
			'passport_country' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'created' => '2010-04-15 10:59:32',
			'modified' => '2010-04-15 10:59:32',
			'last_login' => '2010-04-15 10:59:32',
			'referral' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'phone' => 'Lorem ipsum d',
			'gender' => 'Lorem ip',
			'age' => 1,
			'mobile_phone' => 'Lorem ip',
			'university' => 'Lorem ipsum dolor sit amet',
			'university_major' => 'Lorem ipsum dolor sit amet',
			'country_of_birth' => 'Lorem ipsum dolor sit amet',
			'country_of_residence' => 'Lorem ipsum dolor sit amet',
			'citizenship' => 'Lorem ipsum dolor sit amet',
			'alternate_email' => 'Lorem ipsum dolor sit amet',
			'primary_emergency_contact' => 'Lorem ipsum dolor sit amet',
			'primary_emergency_relationship' => 'Lorem ipsum dolor sit amet',
			'primary_emergency_phone' => 'Lorem ipsum d',
			'primary_emergency_email' => 'Lorem ipsum dolor sit amet',
			'secondary_emergency_contact' => 'Lorem ipsum dolor sit amet',
			'secondary_emergency_relationship' => 'Lorem ipsum dolor sit amet',
			'secondary_emergency_phone' => 'Lorem ipsum d',
			'secondary_emergency_email' => 'Lorem ipsum dolor sit amet',
			'grade_level' => 'Lorem ipsum dolor sit amet',
			'medical_conditions' => 'Lorem ipsum dolor sit amet',
			'medical_condition_comments' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'allergies' => 'Lorem ipsum dolor sit amet',
			'allergies_comments' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'hospitalization' => 'Lorem ipsum dolor sit amet',
			'hospitalization_comments' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'prescription_medication' => 'Lorem ipsum dolor sit amet',
			'prescription_medication_comments' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'diet' => 'Lorem ipsum dolor sit amet',
			'diet_comments' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'shirt_size' => 'Lorem ipsum dolor sit amet',
			'date_summer' => '2010-04-15',
			'date_fall' => '2010-04-15',
			'hobbies' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'project_preference' => 'Lorem ipsum dolor sit amet',
			'interests' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>