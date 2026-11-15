<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_company_profile_renders_all_sections(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee('PT. Danatrans Service Logistics')
            ->assertSee('Connecting Business.')
            ->assertSee(['id="tentang"', 'id="visi-misi"', 'id="layanan"', 'id="alur"', 'id="organisasi"', 'id="kontak"'], false)
            ->assertSee(['Slamet Rusman', 'Proof of Delivery', 'Loading &amp; Departure'], false)
            ->assertSee([route('kms.kodifikasi'), route('kms.personalisasi'), route('login')], false);
    }

    public function test_kms_placeholder_pages(): void
    {
        $this->get('/kms-kodifikasi')->assertOk()->assertSee('Portal KMS Kodifikasi - Dalam Pengembangan');
        $this->get('/kms-personalisasi')->assertOk()->assertSee('Portal KMS Personalisasi - Dalam Pengembangan');
        $this->get('/login')->assertOk()->assertSee('Login Sistem');
    }
}
