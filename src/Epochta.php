<?php

declare(strict_types=1);

namespace Pantagruel964\Epochta;

class Epochta extends BaseMethod
{
    /**
     * @param string $name
     * @param string|null $description
     *
     * @return mixed
     */
    public function addAddressBook($name, $description = null)
    {
        return $this->request([
            'name'        => $name,
            'description' => $description,
        ], __FUNCTION__);
    }

    /**
     * @param int $idAddressBook
     *
     * @return mixed
     */
    public function delAddressbook($idAddressBook)
    {
        return $this->request([
            'idAddressBook' => $idAddressBook,
        ], __FUNCTION__);
    }

    /**
     * @param int $idAddressBook
     * @param string $newName
     * @param string $newDescr
     *
     * @return mixed
     */
    public function editAddressbook($idAddressBook, $newName, $newDescr)
    {
        return $this->request([
            'idAddressBook' => $idAddressBook,
            'newName'       => $newName,
            'newDescr'      => $newDescr,
        ], __FUNCTION__);
    }

    /**
     * @param int $idAddressBook
     * @param int|null $from
     * @param int|null $offset
     *
     * @return mixed
     */
    public function getAddressbook($idAddressBook, $from = null, $offset = null)
    {
        return $this->request([
            'idAddressBook' => $idAddressBook,
            'from'          => $from,
            'offset'        => $offset,
        ], __FUNCTION__);
    }

    /**
     * @param array $searchFields
     * @param int|null $from
     * @param int|null $offset
     *
     * @return mixed
     */
    public function searchAddressBook(array $searchFields = [], $from = null, $offset = null)
    {
        return $this->request([
            'searchFields' => json_encode($searchFields),
            'from'         => $from,
            'offset'       => $offset,
        ], __FUNCTION__);
    }

    /**
     * @param int $idAddressBook
     * @param string $phone
     * @param string|null $variables
     *
     * @return mixed
     */
    public function addPhoneToAddressBook($idAddressBook, $phone, $variables = null)
    {
        return $this->request([
            'idAddressBook' => $idAddressBook,
            'phone'         => $phone,
            'variables'     => $variables,
        ], __FUNCTION__);
    }

    /**
     * @param int $idAddressBook
     * @param array $data
     *
     * @return mixed
     */
    public function addPhonesToAddressBook($idAddressBook, array $data)
    {
        return $this->request([
            'idAddressBook' => $idAddressBook,
            'data'          => json_encode($data),
        ], 'addPhoneToAddressBook');
    }

    /**
     * @param int|null $idAddressBook
     * @param int|null $idPhone
     * @param string|null $phone
     * @param int|null $from
     * @param int|null $offset
     *
     * @return mixed
     */
    public function getPhoneFromAddressBook(
        $idAddressBook = null,
        $idPhone = null,
        $phone = null,
        $from = null,
        $offset = null
    ) {
        return $this->request([
            'idAddressBook' => $idAddressBook,
            'idPhone'       => $idPhone,
            'phone'         => $phone,
            'from'          => $from,
            'offset'        => $offset,
        ], __FUNCTION__);
    }

    /**
     * @param int $idAddressBook
     * @param int $idPhone
     *
     * @return mixed
     */
    public function delPhoneFromAddressBook($idAddressBook, $idPhone)
    {
        return $this->request([
            'idAddressBook' => $idAddressBook,
            'idPhone'       => $idPhone,
        ], __FUNCTION__);
    }

    /**
     * @param int $idPhone
     * @param string $phone
     * @param string $variables
     *
     * @return mixed
     */
    public function editPhone($idPhone, $phone, $variables)
    {
        return $this->request([
            'idPhone'   => $idPhone,
            'phone'     => $phone,
            'variables' => $variables,
        ], __FUNCTION__);
    }

    /**
     * @param array $searchFields
     * @param null $from
     * @param null $offset
     *
     * @return mixed
     */
    public function searchPhones(array $searchFields = [], $from = null, $offset = null)
    {
        return $this->request([
            'searchFields' => json_encode($searchFields),
            'from'         => $from,
            'offset'       => $offset,
        ], __FUNCTION__);
    }

    /**
     * @param int $idAddressBook
     * @param int $varType
     * @param int $varName
     *
     * @return mixed
     */
    public function addAddressBookVariable($idAddressBook, $varType, $varName)
    {
        return $this->request([
            'idAddressBook' => $idAddressBook,
            'varType'       => $varType,
            'varName'       => $varName,
        ], __FUNCTION__);
    }

    /**
     * @param int $idAddressBook
     * @param int $varId
     * @param int $varName
     *
     * @return mixed
     */
    public function editAddressBookVariable($idAddressBook, $varId, $varName)
    {
        return $this->request([
            'idAddressBook' => $idAddressBook,
            'varId'         => $varId,
            'varName'       => $varName,
        ], __FUNCTION__);
    }

    /**
     * @param int $idAddressBook
     *
     * @return mixed
     */
    public function getAllAddressBookVariables($idAddressBook)
    {
        return $this->request([
            'idAddressBook' => $idAddressBook,
        ], __FUNCTION__);
    }

    /**
     * @param int $idAddressBook
     * @param int $varId
     *
     * @return mixed
     */
    public function delAddressBookVariable($idAddressBook, $varId)
    {
        return $this->request([
            'idAddressBook' => $idAddressBook,
            'varId'         => $varId,
        ], __FUNCTION__);
    }

    /**
     * @param int|null $idPhone
     * @param string|null $phone
     * @param string|null $reason
     *
     * @return mixed
     */
    public function addPhoneToExceptions($idPhone = null, $phone = null, $reason = null)
    {
        return $this->request([
            'idPhone' => $idPhone,
            'phone'   => $phone,
            'reason'  => $reason,
        ], __FUNCTION__);
    }

    /**
     * @param int|null $idPhone
     * @param string|null $phone
     * @param int|null $idException
     *
     * @return mixed
     */
    public function delPhoneFromExceptions($idPhone = null, $phone = null, $idException = null)
    {
        return $this->request([
            'idPhone'     => $idPhone,
            'phone'       => $phone,
            'idException' => $idException,
        ], __FUNCTION__);
    }

    /**
     * @param int $idException
     * @param string $reason
     *
     * @return mixed
     */
    public function editExceptions($idException, $reason)
    {
        return $this->request([
            'idException' => $idException,
            'reason'      => $reason,
        ], __FUNCTION__);
    }

    /**
     * @param string|null $idException
     * @param string|null $phone
     * @param int|null $idAddresbook
     * @param int|null $from
     * @param int|null $offset
     *
     * @return mixed
     */
    public function getException($idException = null, $phone = null, $idAddresbook = null, $from = null, $offset = null)
    {
        return $this->request([
            'idException'  => $idException,
            'phone'        => $phone,
            'idAddresbook' => $idAddresbook,
            'from'         => $from,
            'offset'       => $offset,
        ], __FUNCTION__);
    }

    /**
     * @param array $searchFields
     * @param int|null $from
     * @param int|null $offset
     *
     * @return mixed
     */
    public function searchPhonesInExceptions(array $searchFields = [], $from = null, $offset = null)
    {
        return $this->request([
            'searchFields' => json_encode($searchFields),
            'from'         => $from,
            'offset'       => $offset,
        ], __FUNCTION__);
    }

    /**
     * @param string $currency Available values: 'USD','GBP','UAH','RUB','EUR'.
     *
     * @return mixed
     */
    public function getUserBalance(string $currency = '')
    {
        return $this->request([
            'currency' => $currency,
        ], __FUNCTION__);
    }

    /**
     * @param string $name
     * @param string $country Available values: 'RU','UA','SA','EG'.
     * @param string $description
     * @param string|null $siteUrl
     * @param string|null $smsSubject
     * @param string|null $taxId
     * @param string|null $taxName
     * @param int $operatorId
     *
     * @return mixed
     */
    public function registerSenderName(
        $name,
        $country,
        $operatorId,
        $description = null,
        $siteUrl = null,
        $smsSubject = null,
        $taxId = null,
        $taxName = null
    ) {
        return $this->request([
            'name'        => $name,
            'country'     => $country,
            'description' => isset($description) ? base64_encode($description) : null,
            'siteUrl'     => $siteUrl,
            'smsSubject'  => isset($smsSubject) ? base64_encode($smsSubject) : null,
            'taxId'       => $taxId,
            'taxName'     => isset($taxName) ? base64_encode($taxName) : null,
            'operatorId'  => $operatorId,
        ], __FUNCTION__);
    }

    /**
     * @param int|null $idName
     * @param string|null $name
     * @param string|null $country
     * @param int|null $from
     * @param int|null $offset
     *
     * @return mixed
     */
    public function getSenderStatus($idName = null, $name = null, $country = null, $from = null, $offset = null)
    {
        return $this->request([
            'idName'  => $idName,
            'name'    => $name,
            'country' => $country,
            'from'    => $from,
            'offset'  => $offset,
        ], __FUNCTION__);
    }

    /**
     * @param string|null $sender
     * @param string|null $text
     * @param int|null $list_id
     * @param string|null $datetime
     * @param int|null $batch
     * @param int|null $batchinterval
     * @param int|null $sms_lifetime
     * @param string|null $control_phone
     * @param int|null $type
     * @param string|null $asender
     *
     * @return mixed
     */
    public function createCampaign(
        $sender = null,
        $text = null,
        $list_id = null,
        $datetime = null,
        $batch = null,
        $batchinterval = null,
        $sms_lifetime = null,
        $control_phone = null,
        $type = null,
        $asender = null
    ) {
        return $this->request([
            'sender'        => $sender,
            'text'          => $text,
            'list_id'       => $list_id,
            'datetime'      => $datetime,
            'batch'         => $batch,
            'batchinterval' => $batchinterval,
            'sms_lifetime'  => $sms_lifetime,
            'control_phone' => $control_phone,
            'type'          => $type,
            'asender'       => $asender,
        ], __FUNCTION__);
    }

    /**
     * @param string $sender
     * @param string $text
     * @param string $phone
     * @param string $datetime
     * @param int $sms_lifetime
     *
     * @return mixed
     */
    public function sendSms($sender, $text, $phone, $datetime = '', $sms_lifetime = 0)
    {
        return $this->request([
            'sender'       => $sender,
            'text'         => $text,
            'phone'        => $phone,
            'datetime'     => $datetime,
            'sms_lifetime' => $sms_lifetime,
        ], __FUNCTION__);
    }

    /**
     * @param int $id
     *
     * @return mixed
     */
    public function getCampaignInfo($id)
    {
        return $this->request([
            'id' => $id,
        ], __FUNCTION__);
    }

    /**
     * @param int $id
     * @param string $datefrom
     *
     * @return mixed
     */
    public function getCampaignDeliveryStats($id, $datefrom)
    {
        return $this->request([
            'id'       => $id,
            'datefrom' => $datefrom,
        ], __FUNCTION__);
    }

    /**
     * @param int $id
     *
     * @return mixed
     */
    public function cancelCampaign($id)
    {
        return $this->request([
            'id' => $id,
        ], __FUNCTION__);
    }

    /**
     * @param int $id
     *
     * @return mixed
     */
    public function deleteCampaign($id)
    {
        return $this->request([
            'id' => $id,
        ], __FUNCTION__);
    }

    /**
     * @param string $sender
     * @param string $text
     * @param int $list_id
     * @param int|null $type
     *
     * @return mixed
     */
    public function checkCampaignPrice($sender, $text, $list_id, $type = null)
    {
        return $this->request([
            'sender'  => $sender,
            'text'    => $text,
            'list_id' => $list_id,
            'type'    => $type,
        ], __FUNCTION__);
    }

    /**
     * @param int|null $from
     * @param int|null $offset
     *
     * @return mixed
     */
    public function getCampaignList($from = null, $offset = null)
    {
        return $this->request([
            'from'   => $from,
            'offset' => $offset,
        ], __FUNCTION__);
    }
}
