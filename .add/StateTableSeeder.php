<?php

namespace Modules\Register\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Register\Entities\Country;

class StateTableSeeder extends Seeder
{
    /**
     * Run the table seed.
     *
     * @return void
     */
    public function run()
    {
        //$this->ar(); # Argentina
        //$this->br(); # Brasil
        //$this->us(); # United States of American
    }

    private function ar()
    {
        Country::insert([
            ['country_iso_code' => 'AR', 'abbreviation' => null, 'full_name' => 'Ciudad Autónoma de Buenos Aires'],
            ['country_iso_code' => 'AR', 'abbreviation' => null, 'full_name' => 'Buenos Aires'],
            ['country_iso_code' => 'AR', 'abbreviation' => null, 'full_name' => 'Catamarca'],
            ['country_iso_code' => 'AR', 'abbreviation' => null, 'full_name' => 'Chaco'],
            ['country_iso_code' => 'AR', 'abbreviation' => null, 'full_name' => 'Chubut'],
            ['country_iso_code' => 'AR', 'abbreviation' => null, 'full_name' => 'Córdoba'],
            ['country_iso_code' => 'AR', 'abbreviation' => null, 'full_name' => 'Corrientes'],
            ['country_iso_code' => 'AR', 'abbreviation' => null, 'full_name' => 'Entre Ríos'],
            ['country_iso_code' => 'AR', 'abbreviation' => null, 'full_name' => 'Formosa'],
            ['country_iso_code' => 'AR', 'abbreviation' => null, 'full_name' => 'Jujuy'],
            ['country_iso_code' => 'AR', 'abbreviation' => null, 'full_name' => 'La Pampa'],
            ['country_iso_code' => 'AR', 'abbreviation' => null, 'full_name' => 'La Rioja'],
            ['country_iso_code' => 'AR', 'abbreviation' => null, 'full_name' => 'Mendoza'],
            ['country_iso_code' => 'AR', 'abbreviation' => null, 'full_name' => 'Misiones'],
            ['country_iso_code' => 'AR', 'abbreviation' => null, 'full_name' => 'Neuquén'],
            ['country_iso_code' => 'AR', 'abbreviation' => null, 'full_name' => 'Río Negro'],
            ['country_iso_code' => 'AR', 'abbreviation' => null, 'full_name' => 'Salta'],
            ['country_iso_code' => 'AR', 'abbreviation' => null, 'full_name' => 'San Juan'],
            ['country_iso_code' => 'AR', 'abbreviation' => null, 'full_name' => 'San Luis'],
            ['country_iso_code' => 'AR', 'abbreviation' => null, 'full_name' => 'Santa Cruz'],
            ['country_iso_code' => 'AR', 'abbreviation' => null, 'full_name' => 'Santa Fe'],
            ['country_iso_code' => 'AR', 'abbreviation' => null, 'full_name' => 'Santiago del Estero'],
            ['country_iso_code' => 'AR', 'abbreviation' => null, 'full_name' => 'Terra do Fogo'],
            ['country_iso_code' => 'AR', 'abbreviation' => null, 'full_name' => 'Tucumán'],
        ]);
    }

    private function br()
    {
        Country::insert([
            ['country_iso_code' => 'BR', 'abbreviation' => 'AC', 'full_name' => 'Acre'],
            ['country_iso_code' => 'BR', 'abbreviation' => 'AL', 'full_name' => 'Alagoas'],
            ['country_iso_code' => 'BR', 'abbreviation' => 'AP', 'full_name' => 'Amapá'],
            ['country_iso_code' => 'BR', 'abbreviation' => 'AM', 'full_name' => 'Amazonas'],
            ['country_iso_code' => 'BR', 'abbreviation' => 'BA', 'full_name' => 'Bahia'],
            ['country_iso_code' => 'BR', 'abbreviation' => 'CE', 'full_name' => 'Ceará'],
            ['country_iso_code' => 'BR', 'abbreviation' => 'DF', 'full_name' => 'Distrito Federal'],
            ['country_iso_code' => 'BR', 'abbreviation' => 'ES', 'full_name' => 'Espírito Santo'],
            ['country_iso_code' => 'BR', 'abbreviation' => 'GO', 'full_name' => 'Goiás'],
            ['country_iso_code' => 'BR', 'abbreviation' => 'MA', 'full_name' => 'Maranhão'],
            ['country_iso_code' => 'BR', 'abbreviation' => 'MT', 'full_name' => 'Mato Grosso'],
            ['country_iso_code' => 'BR', 'abbreviation' => 'MS', 'full_name' => 'Mato Grosso do Sul'],
            ['country_iso_code' => 'BR', 'abbreviation' => 'MG', 'full_name' => 'Minas Gerais'],
            ['country_iso_code' => 'BR', 'abbreviation' => 'PA', 'full_name' => 'Pará'],
            ['country_iso_code' => 'BR', 'abbreviation' => 'PB', 'full_name' => 'Paraíba'],
            ['country_iso_code' => 'BR', 'abbreviation' => 'PR', 'full_name' => 'Paraná'],
            ['country_iso_code' => 'BR', 'abbreviation' => 'PE', 'full_name' => 'Pernambuco'],
            ['country_iso_code' => 'BR', 'abbreviation' => 'PI', 'full_name' => 'Piauí'],
            ['country_iso_code' => 'BR', 'abbreviation' => 'RJ', 'full_name' => 'Rio de Janeiro'],
            ['country_iso_code' => 'BR', 'abbreviation' => 'RN', 'full_name' => 'Rio Grande do Norte'],
            ['country_iso_code' => 'BR', 'abbreviation' => 'RS', 'full_name' => 'Rio Grande do Sul'],
            ['country_iso_code' => 'BR', 'abbreviation' => 'RO', 'full_name' => 'Rondônia'],
            ['country_iso_code' => 'BR', 'abbreviation' => 'RR', 'full_name' => 'Roraima'],
            ['country_iso_code' => 'BR', 'abbreviation' => 'SC', 'full_name' => 'Santa Catarina'],
            ['country_iso_code' => 'BR', 'abbreviation' => 'SP', 'full_name' => 'São Paulo'],
            ['country_iso_code' => 'BR', 'abbreviation' => 'SE', 'full_name' => 'Sergipe'],
            ['country_iso_code' => 'BR', 'abbreviation' => 'TO', 'full_name' => 'Tocantins']
        ]);
    }

    private function us()
    {
        Country::insert([
            ['country_iso_code' => 'US', 'abbreviation' => 'AL', 'full_name' => 'Alabama'],
            ['country_iso_code' => 'US', 'abbreviation' => 'AK', 'full_name' => 'Alaska'],
            ['country_iso_code' => 'US', 'abbreviation' => 'AZ', 'full_name' => 'Arizona'],
            ['country_iso_code' => 'US', 'abbreviation' => 'AR', 'full_name' => 'Arkansas'],
            ['country_iso_code' => 'US', 'abbreviation' => 'CA', 'full_name' => 'California'],
            ['country_iso_code' => 'US', 'abbreviation' => 'CO', 'full_name' => 'Colorado'],
            ['country_iso_code' => 'US', 'abbreviation' => 'CT', 'full_name' => 'Connecticut'],
            ['country_iso_code' => 'US', 'abbreviation' => 'DE', 'full_name' => 'Delaware'],
            ['country_iso_code' => 'US', 'abbreviation' => 'FL', 'full_name' => 'Florida'],
            ['country_iso_code' => 'US', 'abbreviation' => 'GA', 'full_name' => 'Georgia'],
            ['country_iso_code' => 'US', 'abbreviation' => 'HI', 'full_name' => 'Hawaii'],
            ['country_iso_code' => 'US', 'abbreviation' => 'ID', 'full_name' => 'Idaho'],
            ['country_iso_code' => 'US', 'abbreviation' => 'IL', 'full_name' => 'Illinois'],
            ['country_iso_code' => 'US', 'abbreviation' => 'IN', 'full_name' => 'Indiana'],
            ['country_iso_code' => 'US', 'abbreviation' => 'IA', 'full_name' => 'Iowa'],
            ['country_iso_code' => 'US', 'abbreviation' => 'KS', 'full_name' => 'Kansas'],
            ['country_iso_code' => 'US', 'abbreviation' => 'KY', 'full_name' => 'Kentucky'],
            ['country_iso_code' => 'US', 'abbreviation' => 'LA', 'full_name' => 'Louisiana'],
            ['country_iso_code' => 'US', 'abbreviation' => 'ME', 'full_name' => 'Maine'],
            ['country_iso_code' => 'US', 'abbreviation' => 'MD', 'full_name' => 'Maryland'],
            ['country_iso_code' => 'US', 'abbreviation' => 'MA', 'full_name' => 'Massachusetts'],
            ['country_iso_code' => 'US', 'abbreviation' => 'MI', 'full_name' => 'Michigan'],
            ['country_iso_code' => 'US', 'abbreviation' => 'MN', 'full_name' => 'Minnesota'],
            ['country_iso_code' => 'US', 'abbreviation' => 'MS', 'full_name' => 'Mississippi'],
            ['country_iso_code' => 'US', 'abbreviation' => 'MO', 'full_name' => 'Missouri'],
            ['country_iso_code' => 'US', 'abbreviation' => 'MT', 'full_name' => 'Montana'],
            ['country_iso_code' => 'US', 'abbreviation' => 'NE', 'full_name' => 'Nebraska'],
            ['country_iso_code' => 'US', 'abbreviation' => 'NV', 'full_name' => 'Nevada'],
            ['country_iso_code' => 'US', 'abbreviation' => 'NH', 'full_name' => 'New Hampshire'],
            ['country_iso_code' => 'US', 'abbreviation' => 'NJ', 'full_name' => 'New Jersey'],
            ['country_iso_code' => 'US', 'abbreviation' => 'NM', 'full_name' => 'New Mexico'],
            ['country_iso_code' => 'US', 'abbreviation' => 'NY', 'full_name' => 'New York'],
            ['country_iso_code' => 'US', 'abbreviation' => 'NC', 'full_name' => 'North Carolina'],
            ['country_iso_code' => 'US', 'abbreviation' => 'ND', 'full_name' => 'North Dakota'],
            ['country_iso_code' => 'US', 'abbreviation' => 'OH', 'full_name' => 'Ohio'],
            ['country_iso_code' => 'US', 'abbreviation' => 'OK', 'full_name' => 'Oklahoma'],
            ['country_iso_code' => 'US', 'abbreviation' => 'OR', 'full_name' => 'Oregon'],
            ['country_iso_code' => 'US', 'abbreviation' => 'PA', 'full_name' => 'Pennsylvania'],
            ['country_iso_code' => 'US', 'abbreviation' => 'RI', 'full_name' => 'Rhode Island'],
            ['country_iso_code' => 'US', 'abbreviation' => 'SC', 'full_name' => 'South Carolina'],
            ['country_iso_code' => 'US', 'abbreviation' => 'SD', 'full_name' => 'South Dakota'],
            ['country_iso_code' => 'US', 'abbreviation' => 'TN', 'full_name' => 'Tennessee'],
            ['country_iso_code' => 'US', 'abbreviation' => 'TX', 'full_name' => 'Texas'],
            ['country_iso_code' => 'US', 'abbreviation' => 'UT', 'full_name' => 'Utah'],
            ['country_iso_code' => 'US', 'abbreviation' => 'VT', 'full_name' => 'Vermont'],
            ['country_iso_code' => 'US', 'abbreviation' => 'VA', 'full_name' => 'Virginia'],
            ['country_iso_code' => 'US', 'abbreviation' => 'WA', 'full_name' => 'Washington'],
            ['country_iso_code' => 'US', 'abbreviation' => 'WV', 'full_name' => 'West Virginia'],
            ['country_iso_code' => 'US', 'abbreviation' => 'WI', 'full_name' => 'Wisconsin'],
            ['country_iso_code' => 'US', 'abbreviation' => 'WY', 'full_name' => 'Wyoming']
        ]);
    }
}
