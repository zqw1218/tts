<?php
/**
 * Created by PhpStorm.
 * User: zhangqianwen
 * Date: 2018/4/18
 * Time: 下午7:08
 */
namespace App\Http\Models\DataHub;

use Illuminate\Support\Facades\DB;
use App\Http\Models\CDataHubBase;

/**
 * Class CCoreDataHubPrivilege
 * @package App\Http\Models\DataHub
 */
class CDataHubRole extends CDataHubBase
{
	public function __construct()
	{
		parent::__construct();

		//	...
		$this->m_sTable			= 'z_privilege_table';
		$this->m_sFieldStatus	        = 'pr_status';
		$this->m_sFieldId		= 'pr_id';
		$this->m_sFieldMId		= 'pr_mid';
	}
	public function __destruct()
	{
	}


	/**
	 *	save task info to privilege_table
	 *
	 * 	@param	array	$arrData
	 * 	@param	int	$nMIdReturn
	 *	@return	int
	 */
	public function coreSavePrivilege( $arrData, & $nMIdReturn = null )
	{
		if ( ! is_array( $arrData ) )
		{
			return 100;
		}

		//	...

		if ( !is_numeric( $arrData['com_mid'] ) )
		{
			return 101;
		}

		if ( ! is_numeric( $arrData['staff_role'] ) )
		{
			return 102;
		}

		if ( ! is_array( $arrData['pr_staff_own_list'] ) )
		{
			return 103;
		}


		//
		//  ...
		//
		$nRet	= 110;

		$nTMId	= 11111;
		$sSql	= "INSERT " .
			"INTO " . addslashes( $this->m_sTable ) .
			"( " .
			"  pr_mid, ".
			"  pr_status, " .
			"  pr_pr_status, " .
			"  com_mid, " .
			"  staff_role, " .
			"  pr_staff_own_list " .
			") " .
			"  VALUE ( ?, ?, ?, ?, ?, ? ) ";
		if ( DB::statement( $sSql,
			[
				$nTMId,
				0,
				0,
				$arrData['com_mid'],
				$arrData['staff_role'],
				json_encode($arrData['pr_staff_own_list']),
			] ) )
		{
			//  ...
			$nMIdReturn	= $nTMId;
			$nRet		= 0;

		}
		else
		{
			$nRet = 120;
		}

		//	...
		return $nRet;
	}




}