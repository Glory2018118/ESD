<?php
/**
 * Created by PhpStorm.
 * User: DREAM
 * Date: 12/12/2020
 * Time: 9:28 AM
 */
?>
<?php
class MyAccount extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url_helper');
  }

  public function _remap($page)
  {
    $arr = array(
      'accountinfo' => 'Account Information',
      'accountaccess' => 'Account access',
      'bill' => 'Billing Information',
      'accountdelete' => 'Delete account',
      'favourite' => 'Favourites',
      'download' => 'downloads',
      'invoice' => 'invoices',

    );
    $data['title'] = $arr[$page];

    $this->load->view('common/header_html');
    $this->load->view('common/header');
    $this->load->view('common/header_bot', $data);

    $this->load->view($page);
    $this->load->view('common/footer_html');
    $this->load->view('common/footer');
  }
}
?>