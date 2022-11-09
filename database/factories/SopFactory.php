<?php

namespace Database\Factories;

use App\Models\Sop;
use Illuminate\Database\Eloquent\Factories\Factory;

class SopFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Sop::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = [
            'Process 租車流程'
        ];

        $body = [
            '(1)預約租車 Reservation
            請貴賓確認車款、取車日期時間、租車天數，預約訂車須先支付租金總額之50％訂金，一律以付訂金預留車輛。
            (春節暨連續假期須先繳付全額租金)
             
            (2)支付訂金 Payment
            線上預約支付訂金後完成預約手續，請主動提供匯款人姓名、金額、帳號後五碼、預定車款、連絡電話等資料。
            ​
            匯款帳號 Account
            兆豐國際商業銀行 (民生分行)
            銀行代碼：017
            戶名：寀灃事業有限公司
            帳號：0360-902-0961
            ​
            外籍人士預約請點擊   >>信用卡授權訂車<<
            填寫完成傳至  service@alstonwilliams.com.tw
            ​
            (3)現場取車 Pick up
            1.請承租人提供證件，並支付租金尾款。
            本國人士：國民身份證、汽車駕駛執照。
            外籍人士：護照、國際駕駛執照、簽證or居留證or出入境證明。
            ​
            2.請承租人提供信用卡授權預刷押金，性能車款為5萬元整，超跑車款為10萬元整，車輛歸還後立即刷退。
            ​
            (4)取車地點 Address
            110台北市信義區光復南路495號 (1樓大廳等候專員接待)
            營業時間：週一～五 10:00～21:00，週六、日 採取預約制。
            ​
            送車服務 Service
            台北地區：請提前告知時間與地點，屆時收取500元車資費用。
            桃園機場：請提前告知航班時間與航廈，屆時收取1000元車資費用。
            ​
            (5)驗車放行 Check
            出車前由接待人員陪同驗車，並填寫“汽車出租單”，確認無誤後，客戶簽收，即可放行。'
        ];

        return [
            'title' => $this->faker->randomElement($title),
            'body' => $this->faker->randomElement($body),
        ];
    }
}
