<?php

namespace Database\Seeders;

use App\Models\Registration;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $testUser = [
          ['ถามพัฒน์', 'โอภาสพัฒน์', '111790444886144', 'kjcalfsygz_1654549114@tfbnw.net', 'EAAIFjzcC3tEBACQjfR91mvp5XXWNkkZCpA0soX75qZC3tXEgNDZCDq8QW55BhNU0UUQn2tEI5NHbbNzFECV0ZB76LQ8LzAYvxdplYVPzGOA7Sy9lXVGI5xhkSHkOQ09lSFPqCyIzqn3tAo6oZBKChAkgPGAel6cwWsFj6tJHka4oe8iAWX7ZBHqsVNZBXQsZCDO9tXLi3tn9Q8b4TZC3q5gTy'],
          ['นาถธรรม', 'แสนวงศ์', '100081668786829', 'bydzzqvdes_1654549114@tfbnw.net', 'EAAIFjzcC3tEBADIcF6ax7cGZBoSI1xSahNzZCIMgwAn6JK5TUGEAHDa167wkbBJZBQZBJiRnmw2iFy2E516AMY8DfVvT9ZBjEhChOzsMIY5zGoGAUrP0nYuvlb9KxYJrm0pCu9DVLqFZBZBMZCp6OgsAYcLr8pXvVkddYUSfRa7GM43L73GCiYwLZAeze2z0xHvsKiB7fheTj3zzm1ZAK6zFTH'],
          ['ชนาพร', 'นิธิวรสกุล', '100081843919841', 'dynvtdpekj_1654549114@tfbnw.net', 'EAAIFjzcC3tEBAAp1OF9nAe3dWtMyZAEBOLEG1KGOsktBnydMcvm1OPRZB4RpLPI0pjbkZBBYqwFr2b20CVxoNYRzD9Iqkq9eBbOZBJjIJxSiTgD7rpKVvDheZB9jME8cwL3cyJZB8zLk33tZAzAYCvxrlDE8swqHxXSiOUjKdCsyxKZBgbUlQiZBKlT70LkF8aNwXsAe3ZCpuJN0Cw4ZB8Pscby'],
          ['พชรี', 'จิตรจำเริญรุ่ง', '100082090477449', 'xdufmtlpae_1654549114@tfbnw.net', 'EAAIFjzcC3tEBAKwmDBgxdSraiw4UNczAhZCBh3mbwXaQG7ZBC5OXTZBGOeU7CAMjLuKEMu2OgkpusItK1gydLfi0aZCmZC58ssOqjAYWYL52CoKhpGZBE12s7GzLCubIksuZBZB3T1hcJxWaLkZCw0UPaZAh4Gn5vUuS9a9Sd1nMSaQtwQZCQI5JIJZBN5vBWqvp4NQkUxrnYVu49XCpe9Ar44ZBL'],
        ];

        foreach ($testUser as $user) {
          $user = User::factory()->state([
            'facebook_id' => $user[2],
            'first_name' => $user[0],
            'last_name' => $user[1],
            'email' => $user[3],
            'facebook_token' => $user[4],
          ])->has(Registration::factory())->create();
        }

        User::factory()->count(10)->create();
        User::factory()->state([
          'facebook_id' => '3331371010473634',
          'first_name' => 'Fang',
          'last_name' => 'Suphachai',
          'email' => 'suphachai.fang@gmail.com',
          'facebook_token' => 'EAAIFjzcC3tEBAKQFlUEaGo8biCWewPgxGnB5fVjuVH9PjdFRitZCHE4ERlAqeQbURaR9mw8TMu3wPklmIRFG0qgyUCp77IZCZBm1T2FcZAQqFRw6JFWCiOiCzaCQTm5fmZBU6HLakxO2iLzGyXJmlQ6kGqe3WuwRZAdpMCgWmjh5MvZALIQWkZBx68ZClVJSgxFcEDrmulNH6NbpUqSzr2SkZCTDkeiN7xxywvhCjPxV48lWfqoqB2DefhYr8gSDcgbZBUZD',
          'role' => 'admin',
        ])->create();
    }
}
