<?php


/**
 * Skeleton subclass for representing a row from the 'user_role' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    lib.model
 */
class UserRole extends BaseUserRole
{
	/**
	 * Copy current role to the given partner.
	 * @param int $partnerId
	 */
	public function copyToPartner($partnerId)
	{
		$newRole = new UserRole();
		$newRole->setName($this->getName());
		$newRole->setDescription($this->getDescription());
		$newRole->setStatus($this->getStatus());
		$newRole->setPermissionNames($this->getPermissionNames());
		$newRole->setCustomData($this->getCustomData());
		$newRole->setPartnerId($partnerId); // set new partner id
		$newRole->save();
	}

} // UserRole
