<?php
namespace Omise;

use Omise\Res\OmiseApiResource;

class Occurrence extends OmiseApiResource
{
    const ENDPOINT = 'occurrences';

    /**
     * Retrieves an occurence object.
     *
     * @param  string $id
     *
     * @return Omise\Occurrence
     */
    public static function retrieve($id)
    {
        return parent::g_retrieve(get_class(), self::getUrl($id));
    }

    /**
     * @see Omise\Res\OmiseApiResource::g_reload()
     */
    public function reload()
    {
        parent::g_reload(self::getUrl($this['id']));
    }

    /**
     * @param  string $id
     *
     * @return string
     */
    private static function getUrl($id = '')
    {
        return \Omise\ApiRequestor::OMISE_API_URL . self::ENDPOINT . '/' . $id;
    }
}
