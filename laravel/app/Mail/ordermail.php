<?php



namespace App\Mail;



use Illuminate\Bus\Queueable;

use Illuminate\Mail\Mailable;

use Illuminate\Queue\SerializesModels;

use Illuminate\Contracts\Queue\ShouldQueue;



class ordermail extends Mailable

{

    use Queueable, SerializesModels;

    public $data;

    /**

     * Create a new message instance.

     *

     * @return void

     */

    public function __construct($data)

    {

        //

        $this->data = $data;

    }



    /**

    
 * Build the message.

     *

     * @return $this

     */
    public function build()

    {

        return $this->from('info@zmall.pk','Zmall.pk')->subject('Order Placed | Zmall')->view('mail.ordermailUser', ['mail_data' => $this->data]);

    }

}

