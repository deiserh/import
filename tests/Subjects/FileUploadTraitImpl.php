<?php

/**
 * TechDivision\Import\Subjects\FileUploadTraitImpl
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
*
* PHP version 5
*
* @author    Tim Wagner <t.wagner@techdivision.com>
* @copyright 2016 TechDivision GmbH <info@techdivision.com>
* @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
* @link      https://github.com/techdivision/import
* @link      http://www.techdivision.com
*/

namespace TechDivision\Import\Subjects;

/**
 * Test class for the file upload trait implementation.
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2016 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/techdivision/import
 * @link      http://www.techdivision.com
 */
class FileUploadTraitImpl
{

    /**
     * The filesystem trait.
     *
     * @var \TechDivision\Import\Subjects\FilesystemTrait
     */
    use FilesystemTrait;

    /**
     * The file upload trait we want to test.
     *
     * @var \TechDivision\Import\Subjects\FileUploadTrait
     */
    use FileUploadTrait;
}
