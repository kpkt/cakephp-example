<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link https://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{
    /**
     * This controller does not use a model
     *
     * @var array
     */
    public $uses = array();

    /**
     * Displays a view
     *
     * @return CakeResponse|null
     * @throws ForbiddenException When a directory traversal attempt.
     * @throws NotFoundException When the view file could not be found
     *   or MissingViewException in debug mode.
     */
    public function index()
    {

    }

    /**
     * File view/pages/html_example.ctp
     */
    public function html_example()
    {

    }

    /**
     * File view/pages/html_image.ctp
     */

    public function html_image()
    {

    }

    /**
     * File view/pages/html_link.ctp
     */
    public function html_link()
    {

    }

    /**
     * File view/pages/html_loop.ctp
     */
    public function html_loop()
    {

    }
    /**
     * File view/pages/html_compact.ctp
     */
    public function html_compact()
    {
        $tajuk = "Contoh fungsi compact";
        $subtajuk = "Fungsi di dalam php lib";

        //$this->set('tajuk', $tajuk);
        //$this->set('subtitle', $subtajuk);
        $this->set('kandungan', "Contoh latihan loop");

        $jawapan = 2 + 6;

        $this->set(compact('jawapan','tajuk','subtajuk'));

    }

    public function html_foreach(){
        $tajuk = "Contoh fungsi foreach";
        $datas = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
        $datas2 = array("A","B","C","D","Y","Z");

        $this->set('tajuk', $tajuk);
        $this->set(compact('datas','datas2'));
    }
}
