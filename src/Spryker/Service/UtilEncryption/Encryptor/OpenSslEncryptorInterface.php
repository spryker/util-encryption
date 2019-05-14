<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Service\UtilEncryption\Encryptor;

interface OpenSslEncryptorInterface
{
    /**
     * @param string $plainText
     * @param string $initVector
     * @param string $encryptionKey
     * @param string|null $encryptionMethod
     *
     * @return string
     */
    public function encryptOpenSsl(string $plainText, string $initVector, string $encryptionKey, ?string $encryptionMethod = null): string;
}
