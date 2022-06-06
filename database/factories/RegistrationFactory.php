<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Registration>
 */
class RegistrationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName(),
            'surname' => $this->faker->lastName(),
            'nickname' => $this->faker->randomElement(["ฟ่าง","ข้าวกล้อง","ต้น","กล้า","แตงกวา","ส้มโอ","หลุย","ดัง","บอส","พี","จีน","ธัน","แบงค์","ปุยฝ้าย","เหมย","แตง","ตูน"]),
            'birth' => $this->faker->dateTimeBetween('-15 years', '-13 years'),
            'gender' => $this->faker->randomElement(['men', 'women', 'other']),
            'blood_type' => $this->faker->randomElement(['A', 'B', 'AB', 'O']),
            'religion' => $this->faker->randomElement(['พุทธ', 'อิสลาม', 'คริสต์', 'ไม่มีศาสนา']),
            'address' => $this->faker->buildingNumber(),
            'province' => $this->faker->province(),
            'district' => $this->faker->city(),
            'subdistrict' => $this->faker->city(),
            'phone' => $this->faker->numerify('08########'),
            'email' => $this->faker->email(),
            'education_level' => $this->faker->randomElement(['M.4', 'M.5' ,'M.6', 'HVC.', 'TC.']),
            'school' => $this->faker->randomElement(["โรงเรียนบดินทรเดชา (สิงห์ สิงหเสนี)","โรงเรียนบดินทรเดชา (สิงห์ สิงหเสนี) ๒","โรงเรียนบดินทรเดชา (สิงห์ สิงหเสนี) ๔","โรงเรียนนวมินทราชูทิศ กรุงเทพมหานคร","โรงเรียนวชิรธรรมสาธิต","โรงเรียนวัดสุทธิวราราม","โรงเรียนเทพศิรินทร์ร่มเกล้า","โรงเรียนพรตพิทยพยัต","โรงเรียนวัดบวรนิเวศ","โรงเรียนวัดราชบพิธ","โรงเรียนเซนต์คาเบรียล","โรงเรียนกรุงเทพคริสเตียนวิทยาลัย","โรงเรียนนานาชาติกรุงเทพ","โรงเรียนนานาชาติแองโกลสิงคโปร์","โรงเรียนนานาชาติเอกมัย","โรงเรียนสาธิตนานาชาติพระจอมเกล้า","โรงเรียนเซนต์ดอมินิก","โรงเรียนพระหฤทัยคอนแวนต์","โรงเรียนเซนต์จอห์น","โรงเรียนอัสสัมชัญ"]),
            'education_program' => $this->faker->randomElement(["ทวิศึกษา","วิทยาศาสตร์-คณิตศาสตร์","ภาษาอังกฤษ-ภาษาจีน","ภาษาอังกฤษ-ภาษาญี่ปุ่น","ภาษา-เกาหลี","ภาษา-สเปน","ภาษา-เยอรมัน","ภาษา-ฝรั่งเศษ","วิทยาศาสตร์-คอมพิวเตอร์"]),
            'education_certificate' => 'test_8FJaX5BGg8HnvXA1v7W3dKvFC4XnBlROR3g.png.enc',
            'has_congenital_disease' => '0',
            'congenital_disease_detail' => '',
            'has_allergic' => '0',
            'allergic_detail' => '',
            'shirt_size' => $this->faker->randomElement(['S', 'M', 'L', 'XL', '2XL', '3XL']),
            'activities_detail' => $this->faker->paragraph(),
            'emergency_contact_name' => $this->faker->firstName(),
            'emergency_contact_surname' => $this->faker->lastName(),
            'emergency_contact_phone' => $this->faker->numerify('08########'),
            'emergency_contact_relationship' => $this->faker->randomElement(['บิดา', 'มารดา', 'ปู่', 'ย่า', 'ตา', 'ยาย', 'อา', 'ลุง', 'ป้า', 'น้า', 'พี่ชาย', 'พี่สาว', 'พี่']),
        ];
    }
}
