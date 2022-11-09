<?php

namespace App\Admin\Forms;

use Dcat\Admin\Widgets\Form;
use Symfony\Component\HttpFoundation\Response;

class Setting extends Form
{
    /**
     * Handle the form request.
     *
     * @param array $input
     *
     * @return Response
     */
    public function handle(array $input)
    {
        // dump($input);
        admin_setting($input);

        // return $this->error('Your error message.');

        return $this->response()->success('設置成功')->location('settings');
    }

    /**
     * Build a form here.
     */

    public function form()
    {
        $this->tab('網站配置', function () {
            $this->text('crm_name', '網站標題')->default(admin_setting('crm_name', '網站標題'));
            $this->url('crm_url', '標準網址')->default(admin_setting('crm_url', '網站網址'));
            $this->image('crm_logo', '網站標誌')->default(admin_setting('crm_logo'));
            $this->text('crm_keyword', '網站關鍵字')->help('請用 , 逗號區隔')->default(admin_setting('crm_keyword','關鍵字,關鍵字'));
            $this->textarea('crm_description', '網站描述')->default(admin_setting('crm_description','網站描述'));
        });

        $this->tab('臉書配置', function () {
            $this->text('crm_og_name', '臉書標題')->default(admin_setting('crm_og_name', '臉書標題'));
            $this->text('crm_og_site_name', '臉書次標題')->default(admin_setting('crm_og_site_name', '臉書次標題'));
            $this->url('crm_og_url', '臉書網址')->default(admin_setting('crm_og_url','臉書網址'));
            $this->textarea('crm_og_description', '臉書描述')->default(admin_setting('crm_og_description','臉書描述'));
            $this->image('crm_og_image', '臉書圖片')->default(admin_setting('crm_og_image'));
        });
    }

}