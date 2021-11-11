<?php



namespace App\Mail;



use Illuminate\Bus\Queueable;

use Illuminate\Mail\Mailable;

use Illuminate\Queue\SerializesModels;

use Illuminate\Contracts\Queue\ShouldQueue;



class ordermailVendor extends Mailable

{

    use Queueable, SerializesModels;

    public $dataVendor;

    /**

     * Create a new message instance.

     *

     * @return void

     */

    public function __construct($dataVendor)

    {

        //

        $this->data = $dataVendor;

    }



    /**

    
 * Build the message.

     *

     * @return $this

     */
    public function build()

    {

        return $this->from('info@zmall.pk','Zmall.pk')->subject('Order Placed | Zmall')->view('mail.ordermailVendor', ['mail_data' => $this->data]);

    }

}

