<?php 

function biodata() {

	$data['biodata'] = [
		'name' => 'Tilis Tiadi',
		'age' => 26,
		'address' => 'Tirtohargo, Kretek Bantul, Yogyakarta',
		'hobbies' => ['Nonton', 'Browsing', 'Belajar'],
		'is_married' => FALSE,
		'list_schools' => [
			[
				'name' => 'SDN Negeri 2 Baruga',
				'year_in' => '1999',
				'year_out' => '2005',
				'major' => null
			],
			[
				'name' => 'SMP Negeri 10 Kendari',
				'year_in' => '2005',
				'year_out' => '2008',
				'major' => null
			],
			[
				'name' => 'SMK Negeri 4 Kendari',
				'year_in' => '2008',
				'year_out' => '2011',
				'major' => 'Teknik Komputer dan Jaringan'
			],
		],
		'skills' => [
			[
				'skill_name' => 'HTML & CSS',
				'level' => 'Advanced',
			],
			[
				'skill_name' => 'PHP Native Procedural',
				'level' => 'Advanced',
			],
			[
				'skill_name' => 'PHP Framework Laravel and Codeigniter',
				'level' => 'Beginner',
			],
			[
				'skill_name' => 'Vanilla Javascript',
				'level' => 'Beginner',
			],
			[
				'skill_name' => 'JQuery & Ajax',
				'level' => 'Beginner',
			],
			[
				'skill_name' => 'MySQL',
				'level' => 'Begginer',
			],
		],
		'interest_in_coding' => TRUE
	];

	return $data;
}

echo json_encode(biodata());