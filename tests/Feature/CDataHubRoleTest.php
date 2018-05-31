<?php

namespace Tests\Feature;

use Tests\TestCase;

use App\Http\Models\DataHub;
use Throwable;


class CDataHubRoleTest extends TestCase
{

	/**
	 * @test
	 * @group role
	 * 测试公司角色添加权限
	 */
	public function test_role_privilege()
	{
		parent::setUp();
		$arrData =
		[
			[
				'com_mid' 			=> 1,
				'staff_role' 		=> 1,
				'pr_staff_own_list' =>
				[
					'module' =>'1',
					'pr_module' =>'1'
				],
			],
			[
				'com_mid' 			=> 2,
				'staff_role' 		=> 's',
				'pr_staff_own_list' =>
				[
						'module' =>'1',
						'pr_module' =>'1'
				],
			]
		];

		$cRole	= new DataHub\CDataHubRole();

		foreach ( $arrData as $arrRole )
		{
			$arrQ = $cRole->coreSavePrivilege( $arrRole );
			print_r($arrQ);
			echo "\n";
		}

		$this->assertTrue(true);

	}


//
//	public function testRoleInfo()
//	{
//		$arrData =
//		[
//			[
//				'u_mid' =>'1'
//			],
//			[
//				'store_mid' =>'1',
//				'staff_mid' =>'1'
//			],
//			[
//				'com_mid' =>'1',
//				'staff_role' =>'1'
//			]
//		];
//
//		$cRole	= new DataHub\CDataHubRole();
//
//		foreach ( $arrData as $arrRole )
//		{
//			$arrQ = $cRole->coreRolePrivilegeInfo( $arrRole );
//			if( ! CLib::IsArrayWithKeys( $arrQ ))
//			{
//				print_r($arrQ);
//				echo "\n";
//			}
//		}
//
//		$this->assertTrue(true);
//	}


}
