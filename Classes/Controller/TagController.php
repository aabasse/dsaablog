<?php
namespace Dawin2015\Dsaablog\Controller;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016 diaby <diaby_souleymane12@yahoo.fr>
 *           Abasse <ahmad.abasse@gmail.com>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * TagController
 */
class TagController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * @var \Dawin2015\Dsaablog\Domain\Repository\TagRepository;
     * @inject
     */
    protected $tagRepository;


    public function listAction()
    {
        $tags = $this->tagRepository->findAll();
        $this->view->assign('tags', $tags);
    }
    
    /**
     * action show
     *
     * @param \Dawin2015\Dsaablog\Domain\Model\Tag $tag
     * @return void
     */
    public function showAction(\Dawin2015\Dsaablog\Domain\Model\Tag $tag)
    {
        $this->view->assign('tag', $tag);
    }

}