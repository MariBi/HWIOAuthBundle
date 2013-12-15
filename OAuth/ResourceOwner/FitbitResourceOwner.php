<?php

/*
 * This file is part of the HWIOAuthBundle package.
 *
 * (c) Hardware.Info <opensource@hardware.info>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace HWI\Bundle\OAuthBundle\OAuth\ResourceOwner;

use HWI\Bundle\OAuthBundle\Security\Core\Authentication\Token\OAuthToken;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * FitbitResourceOwner
 *
 * @author Mario Bickler <maribi1910@gmail.de>
 */
class FitbitResourceOwner extends GenericOAuth1ResourceOwner
{
    /**
     * {@inheritDoc}
     */
    protected function configureOptions(OptionsResolverInterface $resolver)
    {
        parent::configureOptions($resolver);
        $baseUrl = 'https://www.fitbit.com';
        $resolver->setDefaults(array(

            'authorization_url' => $baseUrl . '/oauth/authorize',
            'request_token_url' => $baseUrl . '/oauth/request_token',
            'access_token_url'  => $baseUrl . '/oauth/access_token',
            'infos_url' =>  "https://api.fitbit.com/1/user/-/profile.json"

        ));
    }
}
