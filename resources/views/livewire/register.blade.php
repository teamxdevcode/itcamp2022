
      <div x-data="app()" x-cloak>
        <div class="max-w-3xl mx-auto px-4 pb-10 md:pt-10 md:pb-16">

          @if ($errors->all())
            <div class="px-4 py-3 leading-normal text-red-100 bg-red-700 rounded-lg" role="alert">
              <p>{{$errors->first()}}</p>
            </div>
          @endif

          <div x-show.transition="$wire.step === 4">
            <div
              class="bg-white rounded-lg p-10 flex items-center shadow justify-center"
            >
              <div>
                <svg class="mb-4 h-20 w-20 text-green-500 mx-auto" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>

                <h2 class="text-2xl mb-4 text-gray-800 text-center font-bold">
                  ลงทะเบียนสำเร็จ
                </h2>

                <a href="{{route('home')}}" class="w-40 block mx-auto focus:outline-none py-2 px-5 rounded-lg shadow-sm text-center text-gray-600 bg-white hover:bg-gray-100 font-medium border">
                  กลับหน้าหลัก
                </a>
              </div>
            </div>
          </div>

          <div x-show.transition="$wire.step != 4">
            <!-- Top Navigation -->
            <div class="border-b-2 py-4">
              <div
                class="uppercase tracking-wide text-xs font-bold text-gray-500 mb-1 leading-tight"
                x-text="`หน้าที่: {{$this->step}} จาก 3`"
              ></div>
              <div
                class="flex flex-col md:flex-row md:items-center md:justify-between"
              >
                <div class="flex-1">
                  <div x-show="$wire.step === 1">
                    <div class="text-lg font-bold text-gray-700 leading-tight">
                      ข้อมูลส่วนตัว
                    </div>
                  </div>

                  <div x-show="$wire.step === 2">
                    <div class="text-lg font-bold text-gray-700 leading-tight">
                      ข้อมูลส่วนตัวเพิ่มเติม
                    </div>
                  </div>

                  <div x-show="$wire.step === 3">
                    <div class="text-lg font-bold text-gray-700 leading-tight">
                      ยืนยันข้อมูลส่วนตัว
                    </div>
                  </div>
                </div>

                <div class="flex items-center md:w-64">
                  <div class="w-full bg-white rounded-full mr-2">
                    <div
                      class="rounded-full bg-green-500 text-xs leading-none h-2 text-center text-white"
                      :style="'width: '+ parseInt({{$step}} / 3 * 100) +'%'"
                    ></div>
                  </div>
                  <div
                    class="text-xs w-10 text-gray-600"
                    x-text="parseInt($wire.step / 3 * 100) +'%'"
                  ></div>
                </div>
              </div>
            </div>
            <!-- /Top Navigation -->

            <!-- Step Content -->
            <div class="py-3 pb-10">
              <div x-show.transition.in="$wire.step === 1">
                <h1 class="text-lg font-bold text-gray-700 leading-tight my-4"># ข้อมูลผู้สมัคร</h1>
                <div class="flex md:space-x-3 flex-col md:flex-row">
                  <div class="w-full md:w-1/2 mb-5">
                    <label
                      for="firstname"
                      class="font-bold mb-1 text-gray-700 block"
                      >ชื่อจริง</label
                    >
                    <input
                      type="text"
                      class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                      placeholder="Enter your firstname..."
                      wire:model.lazy="data.name"/>
                  </div>

                  <div class="w-full md:w-1/2 mb-5">
                    <label for="lastname"class="font-bold mb-1 text-gray-700 block">นามสกุล</label>
                    <input
                      type="text"
                      class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                      placeholder="Enter your lastname..."
                      wire:model.lazy="data.surname"/>
                  </div>
                </div>

                <div class="flex md:space-x-3 flex-col md:flex-row">
                  <div class="w-full md:w-1/2 mb-5">
                    <label for="email" class="font-bold mb-1 text-gray-700 block">อีเมล</label>
                    <input
                      type="email"
                      class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                      placeholder="Enter your email address..."
                      wire:model.lazy="data.email"
                    />
                  </div>
                  <div class="w-full md:w-1/2 mb-5">
                    <label
                      for="phone"
                      class="font-bold mb-1 text-gray-700 block"
                      >เบอร์โทรศัพท์มือถือ</label>
                    <input
                      type="tel"
                      class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                      placeholder="Enter your phone number..."
                      wire:model.lazy="data.phone"
                    />
                  </div>
                </div>

                <div class="flex md:space-x-3 flex-col md:flex-row">
                  <div class="mb-5 w-full md:w-1/2">
                    <label for="dateofbirth"class="font-bold mb-1 text-gray-700 block">วัน เดือน ปี เกิด</label>
                    <input
                      type="date"
                      class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                      placeholder="Enter your date..."
                      wire:model.lazy="data.birthday"
                    />
                  </div>
                  <div class="mb-5 w-full md:w-1/2">
                    <label
                      for="gender"
                      class="font-bold mb-1 text-gray-700 block"
                      >เพศ</label
                    >
                    <select
                      name="gender"
                      id="gender"
                      class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                      wire:model.lazy="data.gender"
                    >
                      <option value="" selected hidden class="hidden">
                        เลือกเพศ *
                      </option>
                      <option value="Male">ชาย</option>
                      <option value="Female">หญิง</option>
                      <option value="LGBTQ+">LGBTQ+</option>
                    </select>
                  </div>
                </div>
                <div class="mb-5 flex md:space-x-3 flex-col md:flex-row">
                  <div class="w-full md:w-1/2">
                    <label
                      for="religion"
                      class="font-bold mb-1 text-gray-700 block"
                      >ศาสนา</label
                    >
                    <select
                      name="religion"
                      id="religion"
                      class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                      wire:model.lazy="data.religion"
                    >
                      <option value="" selected hidden class="hidden">
                        เลือกศาสนา *
                      </option>
                      <option value="Buddhism">พุทธ</option>
                      <option value="Christianity">คริสต์</option>
                      <option value="Islam">อิสลาม</option>
                      <option value="Other">อื่นๆ</option>
                    </select>
                  </div>
                </div>
                <hr>
                <h1 class="text-lg font-bold text-gray-700 leading-tight my-4"># ข้อมูลที่อยู่ปัจจุบัน</h1>
                <div class="mb-5">
                  <label
                    for="address"
                    class="font-bold mb-1 text-gray-700 block"
                    >ที่อยู่ปัจจุบัน</label
                  >
                  <textarea
                    name="address"
                    id="address"
                    cols="30"
                    rows="4"
                    placeholder="123/45 ถนนพัฒนา ซอยปรับปรุง"
                    class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                    wire:model.lazy="data.address"
                  ></textarea>
                </div>
                <div class="mb-5 flex md:space-x-3 flex-col md:flex-row">
                  <div class="w-full md:w-1/2 mt-5 md:mt-0">
                    <label
                      for="sub-district"
                      class="font-bold mb-1 text-gray-700 block"
                      >ตำบล / แขวง</label
                    >
                    <input
                      type="tel"
                      class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                      placeholder="Enter your subdistrict..."
                      wire:model.lazy="data.subdistrict"
                    />
                  </div>
                  <div class="w-full md:w-1/2">
                    <label
                      for="district"
                      class="font-bold mb-1 text-gray-700 block"
                      >อำเภอ / เขต</label
                    >
                    <input
                      type="tel"
                      class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                      placeholder="Enter your district..."
                      wire:model.lazy="data.district"
                    />
                  </div>
                </div>
                <div class="flex md:space-x-3 flex-col md:flex-row">
                  <div class="mb-5 w-full md:w-1/2">
                    <label
                      for="province"
                      class="font-bold mb-1 text-gray-700 block"
                      >จังหวัด</label
                    >
                    <input
                      type="tel"
                      class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                      placeholder="Enter your province..."
                      wire:model.lazy="data.province"
                    />
                  </div>
                </div>
                <hr>
                <h1 class="text-lg font-bold text-gray-700 leading-tight my-4"># ข้อมูลการศึกษา</h1>
                <div class="mb-5">
                  <label for="school" class="font-bold mb-1 text-gray-700 block"
                    >โรงเรียน / สถานศึกษา</label
                  >
                  <input
                    type="text"
                    class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                    placeholder="Enter your school ..."
                    wire:model.lazy="data.school"
                  />
                </div>
                <div class="mb-5 flex md:space-x-3 flex-col md:flex-row">
                  <div class="mb-5 md:w-1/2 w-full">
                    <label
                      for="grade"
                      class="font-bold mb-1 text-gray-700 block"
                      >ศึกษาอยู่ในระดับชั้น</label
                    >
                    <select
                      name="grade"
                      id="grade"
                      class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                      wire:model.lazy="data.education_level"
                    >
                      <option value="" selected disabled class="hidden">
                        เลือกระดับชั้น
                      </option>
                      <option value="M.4">ชั้นมัธยมศึกษาปีที่ 4</option>
                      <option value="M.5">ชั้นมัธยมศึกษาปีที่ 5</option>
                      <option value="M.6">ชั้นมัธยมศึกษาปีที่ 6</option>
                      <option value="HVC.">ปวช.</option>
                      <option value="TC.">ปวส.</option>
                    </select>
                  </div>
                  <div class="mb-5 w-full md:w-1/2">
                    <label
                      for="curriculum"
                      class="font-bold mb-1 text-gray-700 block"
                      >แผนการเรียน / สาขาที่เรียน</label
                    >
                    <input
                      type="text"
                      class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                      placeholder="Enter your curriculum ..."
                      wire:model.lazy="data.educational_program"
                    />
                  </div>
                </div>
                <div class="mb-5">
                  <label for="school_confirmation" class="font-bold mb-1 text-gray-700 block">ใบรับรองผลการเรียน (เช่น ปพ.1 ปพ.7)</label>
                  <div class="flex md:flex-row flex-col gap-5">
                    @if(isset(Auth::user()->registration->educational_certificate))
                    <div class="w-full md:w-1/2 flex flex-col items-center justify-center p-5 border border-gray-300 rounded-lg border-dashed">
                        <a href="{{route('educational-certificate')}}" target="_blank"><img src="{{route('educational-certificate')}}"/></a>
                    </div>
                    @endif
                    <div class="w-full {{isset(Auth::user()->registration->educational_certificate) ? 'md:w-1/2' : ''}} flex items-start justify-center flex-col space-y-3">
											<h1>{{ isset(Auth::user()->registration->educational_certificate) ? 'อัพโหลดรูปภาพใหม่' : 'อัพโหลดรูปภาพ' }}</h1>
                      <input class="bg-white py-4 px-5 rounded-lg transition cursor-pointer shadow-sm w-full" type="file">
                      <span class="text-gray-500 text-sm text-center">Supported formates: JPEG, PNG</span>
                    </div>
                  </div>
                </div>
                <!--  -->
              </div>
              <div x-show.transition.in="$wire.step === 2">
                <h1 class="text-lg font-bold text-gray-700 leading-tight my-4"># ข้อมูลทั่วไป</h1>
                <div class="mb-5">
                  <label
                    for="shirtSize"
                    class="font-bold mb-1 text-gray-700 block"
                    >ไซส์เสื้อที่ใส่</label
                  >
                  <select
                    name="shirtSize"
                    id="shirtSize"
                    placeholder="เลือกไซส์เสื้อ"
                    class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                    wire:model.lazy="data.shirt_size"
                  >
                    <option value="" select hidden class="hidden">
                      เลือกไซส์เสื้อ
                    </option>
                    <option value="S">
                      S (รอบอก 33 นิ้ว ความยาว 25 นิ้ว)
                    </option>
                    <option value="M">
                      M (รอบอก 36 นิ้ว ความยาว 27 นิ้ว)
                    </option>
                    <option value="L">
                      L (รอบอก 40 นิ้ว ความยาว 29 นิ้ว)
                    </option>
                    <option value="XL">
                      XL (รอบอก 44 นิ้ว ความยาว 29.5 นิ้ว)
                    </option>
                    <option value="XXL">
                      XXL (รอบอก 48 นิ้ว ความยาว 30 นิ้ว)
                    </option>
                    <option value="XXXL">
                      XXXL (รอบอก 52 นิ้ว ความยาว 32 นิ้ว)
                    </option>
                  </select>
                </div>
                <div class="mb-5">
                  <label
                    for="firstname"
                    class="font-bold mb-1 text-gray-700 block"
                    >รู้จัก ITCAMP ครั้งที่ 18 จากที่ไหน</label
                  >
                  <div class="my-4 grid grid-cols-1">
                    <label class="inline-flex items-center">
                      <input
                        name="Facebook"
                        class="text-green-500 w-5 h-5 mr-2 focus:ring-green-400 focus:ring-opacity-25 border border-gray-300 rounded"
                        type="checkbox"
                        value="Facebook"
                        wire:model="known_us_from"
                      />
                      Facebook
                    </label>
                    <label class="inline-flex items-center">
                      <input
                        name="Instagram"
                        class="text-green-500 w-5 h-5 mr-2 focus:ring-green-400 focus:ring-opacity-25 border border-gray-300 rounded"
                        type="checkbox"
                        value="Instagram"
                        wire:model="known_us_from"
                      />
                      Instagram
                    </label>
                    <label class="inline-flex items-center">
                      <input
                        name="TikTok"
                        class="text-green-500 w-5 h-5 mr-2 focus:ring-green-400 focus:ring-opacity-25 border border-gray-300 rounded"
                        type="checkbox"
                        value="TikTok"
                        wire:model="known_us_from"
                      />
                      TikTok
                    </label>
                    <label class="inline-flex items-center">
                      <input
                        name="ToBeIT'66"
                        class="text-green-500 w-5 h-5 mr-2 focus:ring-green-400 focus:ring-opacity-25 border border-gray-300 rounded"
                        type="checkbox"
                        value="ToBeIT'66"
                        wire:model="known_us_from"
                      />
                      ToBeIT'66
                    </label>
                    <label class="inline-flex items-center">
                      <input
                        name="Twitter"
                        class="text-green-500 w-5 h-5 mr-2 focus:ring-green-400 focus:ring-opacity-25 border border-gray-300 rounded"
                        type="checkbox"
                        value="Twitter"
                        wire:model="known_us_from"
                      />
                      Twitter
                    </label>
                    <label class="inline-flex items-center">
                      <input
                        name="เพื่อน"
                        class="text-green-500 w-5 h-5 mr-2 focus:ring-green-400 focus:ring-opacity-25 border border-gray-300 rounded"
                        type="checkbox"
                        value="Friends"
                        wire:model="known_us_from"
                      />
                      เพื่อน
                    </label>
                    <label class="inline-flex items-center">
                      <input
                        name="โรงเรียน"
                        class="text-green-500 w-5 h-5 mr-2 focus:ring-green-400 focus:ring-opacity-25 border border-gray-300 rounded"
                        type="checkbox"
                        value="School"
                        wire:model="known_us_from"
                      />
                      โรงเรียน
                    </label>
                    <label class="inline-flex items-center">
                      <input
                        name="ช่องทางอื่นๆ"
                        class="text-green-500 w-5 h-5 mr-2 focus:ring-green-400 focus:ring-opacity-25 border border-gray-300 rounded"
                        type="checkbox"
                        value="Other"
                        wire:model="known_us_from"
                      />
                      ช่องทางอื่นๆ
                    </label>
                  </div>
                </div>
                <hr>
                <h1 class="text-lg font-bold text-gray-700 leading-tight my-4"># ข้อมูลสุขภาพ</h1>
                <div class="mb-5">
                  <label
                    for="disease"
                    class="font-bold mb-1 text-gray-700 block"
                    >โรคประจำตัว ( ถ้าไม่มีให้ตอบว่า ไม่มี )</label
                  >
                  <input
                    type="text"
                    class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                    placeholder="Enter your disease ..."
                    wire:model.lazy="data.congenital_disease"
                  />
                </div>
                <div class="mb-5">
                  <label
                    for="medAllergy"
                    class="font-bold mb-1 text-gray-700 block"
                    >ยาที่แพ้ ( ถ้าไม่มีให้ตอบว่า ไม่มี )</label
                  >
                  <input
                    type="text"
                    class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                    placeholder="เช่น ยาแก้ไอ ยาแก้อักเสบ ยาฆ่าเชื้อ..."
                    wire:model.lazy="data.allergic_drug"
                  />
                </div>
                <div class="mb-5">
                  <label
                    for="medAllergy"
                    class="font-bold mb-1 text-gray-700 block"
                    >อาหารที่แพ้ ( ถ้าไม่มีให้ตอบว่า ไม่มี )</label
                  >
                  <input
                    type="text"
                    class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                    placeholder="เช่น กุ้ง อาหารทะเล ถั่วปากอ้า ..."
                    wire:model.lazy="data.allergen"
                  />
                </div>
                <div class="w-full md:w-1/2 mb-5">
                  <label
                    for="bloodgroup"
                    class="font-bold mb-1 text-gray-700 block"
                    >กรุ๊ปเลือด</label
                  >
                  <select
                    name="bloodgroup"
                    id="bloodgroup"
                    class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                    wire:model.lazy="data.blood_type"
                  >
                    <option value="" selected hidden class="hidden">
                      เลือกกรุ๊ปเลือด *
                    </option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="AB">AB</option>
                    <option value="O">O</option>
                  </select>
                </div>
                <hr>
                <h1 class="text-lg font-bold text-gray-700 leading-tight my-4"># ช่องทางการติดต่อฉุกเฉิน</h1>
                <div class="flex md:space-x-3 flex-col md:flex-row">
                  <div class="mb-5 w-full md:w-1/2">
                    <label
                      for="firstname"
                      class="font-bold mb-1 text-gray-700 block"
                      >ชื่อจริง</label
                    >
                    <input
                      type="text"
                      class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                      placeholder="Enter your firstname..."
                      wire:model.lazy="data.emergency_name"
                    />
                  </div>
                  <div class="mb-5 w-full md:w-1/2">
                    <label
                      for="lastname"
                      class="font-bold mb-1 text-gray-700 block"
                      >นามสกุล</label
                    >
                    <input
                      type="text"
                      class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                      placeholder="Enter your lastname..."
                      wire:model.lazy="data.emergency_surname"
                    />
                  </div>
                </div>
                <div class="mb-5 flex md:space-x-3 flex-col md:flex-row">
                  <div class="w-full md:w-1/2">
                    <label
                      for="phone"
                      class="font-bold mb-1 text-gray-700 block"
                      >เบอร์โทรศัพท์มือถือ</label
                    >
                    <input
                      type="tel"
                      class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                      placeholder="Enter your phone number..."
                      wire:model.lazy="data.emergency_phone"
                    />
                  </div>
                  <div class="w-full md:w-1/2">
                    <label
                      for="relevant"
                      class="font-bold mb-1 text-gray-700 block"
                      >ความเกี่ยวข้อง</label
                    >
                    <input
                      type="text"
                      class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                      placeholder="Enter your relevant..."
                      wire:model.lazy="data.emergency_relationship"
                    />
                  </div>
                </div>
                @if (!in_array(Auth::user()->registration?->subcamp, ['Webtopia','DataVergent','Game Runner','Nettapunk']))
                <div class="mb-5 flex items-center justify-center flex-col">
                  <img
                    src="https://media.discordapp.net/attachments/964882961797349438/984724891708317716/unknown.png"
                    alt="subcamp"
                    class="mb-5"
                  />
                  <label for="email" class="font-bold mb-1 text-gray-700 block"
                    >เลือกค่ายย่อยที่สนใจ</label
                  >

                  <div
                    class="flex space-y-5 md:space-y-0 md:space-x-5 flex-col md:flex-row"
                  >
                    <label
                      class="flex justify-start items-center text-truncate rounded-lg bg-white pl-4 pr-6 py-3 shadow-sm"
                    >
                      <div class="text-teal-600 mr-3">
                        <input
                          type="radio"
                          value="Webtopia"
                          class="form-radio focus:outline-none focus:shadow-outline"
                          wire:model.lazy="data.subcamp"
                        />
                      </div>
                      <div class="select-none text-gray-700">Webtopia</div>
                    </label>

                    <label
                      class="flex justify-start items-center text-truncate rounded-lg bg-white pl-4 pr-6 py-3 shadow-sm"
                    >
                      <div class="text-teal-600 mr-3">
                        <input
                          type="radio"
                          value="DataVergent"
                          class="form-radio focus:outline-none focus:shadow-outline"
                          wire:model.lazy="data.subcamp"
                        />
                      </div>
                      <div class="select-none text-gray-700">DataVergent</div>
                    </label>

                    <label
                      class="flex justify-start items-center text-truncate rounded-lg bg-white pl-4 pr-6 py-3 shadow-sm"
                    >
                      <div class="text-teal-600 mr-3">
                        <input
                          type="radio"
                          value="Game Runner"
                          class="form-radio focus:outline-none focus:shadow-outline"
                          wire:model.lazy="data.subcamp"
                        />
                      </div>
                      <div class="select-none text-gray-700">Game Runner</div>
                    </label>

                    <label
                      class="flex justify-start items-center text-truncate rounded-lg bg-white pl-4 pr-6 py-3 shadow-sm"
                    >
                      <div class="text-teal-600 mr-3">
                        <input
                          type="radio"
                          value="Nettapunk"
                          class="form-radio focus:outline-none focus:shadow-outline"
                          wire:model.lazy="data.subcamp"
                        />
                      </div>
                      <div class="select-none text-gray-700">Nettapunk</div>
                    </label>
                  </div>
                </div>
                @endif
              </div>
              <div x-show.transition.in="$wire.step === 3">
                <div class="mb-5">
                  <label for="policy" class="font-bold mb-1 text-gray-700 block"
                    >ข้อมูลส่วนบุคคล คืออะไร?</label
                  >

                  <div class="flex">
                    <p>
                      ข้อมูลส่วนบุคคล หมายถึง
                      ข้อมูลเกี่ยวกับบุคคลซึ่งทำให้สามารถระบุตัวตนบุคคลนั้นได้
                      ไม่ว่าทางตรงหรือทางอ้อม แต่ไม่รวมถึงข้อมูลของผู้ถึงแก่กรรม
                    </p>
                  </div>
                </div>

                <div class="mb-5">
                  <label for="policy" class="font-bold mb-1 text-gray-700 block"
                    >ลักษณะข้อมูลส่วนบุคคลที่เราเก็บรวบรวม</label
                  >

                  <div class="flex flex-col">
                    <p>เราจะเก็บรวบรวมข้อมูลส่วนบุคคลดังต่อไปนี้</p>
                    <ul class="ml-2">
                      <li>
                        - ข้อมูลที่บ่งชี้ตัวตน อาทิ ชื่อ วันเกิด เพศ กรุ๊ปเลือด
                        ศาสนา
                      </li>
                      <li>
                        - ข้อมูลช่องทางการติดต่อ อาทิ ที่อยู่ เบอร์โทร อีเมล
                      </li>
                      <li>
                        - ข้อมูลส่วนตัว อาทิ ชื่อบัญชีผู้ใช้ ข้อมูลการแพทย์
                        ข้อมูลการศึกษา ข้อมูลผู้ปกครอง
                      </li>
                      <li>- ข้อมูลบัญชี อาทิ รายละเอียดการชำระเงิน</li>
                      <li>
                        - ข้อมูลทางเทคนิค อาทิ Google Analytics, Facebook
                        Pixels, Hotjar หมายเลขระบุตำแหน่งคอมพิวเตอร์ (IP
                        Address) ข้อมูลการเข้าระบบ ข้อมูลการใช้งาน และ
                        การตั้งค่า (log)
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="mb-5">
                  <label for="policy" class="font-bold mb-1 text-gray-700 block"
                    >แหล่งที่มาของข้อมูลส่วนบุคคล</label
                  >

                  <div class="flex flex-col">
                    <p>เราได้รับข้อมูลส่วนบุคคลของท่านจาก 2 ช่องทาง ดังนี้</p>
                    <ul class="ml-2">
                      <li>
                        - เราได้รับข้อมูลส่วนบุคคลจากท่านโดยตรง
                        โดยเราจะเก็บรวบรวมข้อมูลส่วนบุคคลของท่านจากการยินยอมเข้าร่วมโครงการ
                        ดังนี้
                        <ul class="ml-2">
                          <li>
                            1. เมื่อท่านลงทะเบียนบัญชีเพื่อเข้าร่วมโครงการ
                          </li>
                          <li>
                            2.
                            จากการเก็บข้อมูลการใช้เว็บไซต์ของท่านผ่านบราวเซอร์คุกกี้
                          </li>
                          <li>
                            3. จากการติดต่อสอบถามของท่าน
                            หรือผ่านการโต้ตอบทางอีเมลหรือ ช่องทางการสื่อสารอื่น
                            ๆ เช่น โทรศัพท์
                            เพื่อที่ผู้ให้บริการสามารถติดต่อท่านกลับได้
                          </li>
                          <li>
                            4. เมื่อท่านเข้าสู่ระบบบัญชีผู้ใช้บนเว็บไซต์ของเรา
                            หรือแอพพลิเคชันอื่น ๆ ที่เกี่ยวข้อง อาทิ เฟสบุ๊ค
                          </li>
                        </ul>
                      </li>
                      <li>
                        - เราได้รับข้อมูลส่วนบุคคลของท่านมาจากบุคคลที่สาม
                        Facebook Login
                        โดยได้รับข้อมูลเมื่อท่านสมัครระบบหรือเข้าใช้งานระบบผ่านช่องทางของบุคคลที่สาม
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="mb-5">
                  <label for="policy" class="font-bold mb-1 text-gray-700 block"
                    >วัตถุประสงค์ในการประมวลผลข้อมูล
                  </label>

                  <div class="flex">
                    <ul class="ml-2">
                      <li>
                        -
                        เราจัดเก็บข้อมูลส่วนบุคคลของท่านเพื่อประโยชน์ในการจัดฐานข้อมูลในการวิเคราะห์
                        และเสนอสิทธิประโยชน์ตามความสนใจของท่าน (เผื่อสปอน)
                      </li>
                      <li>
                        -
                        เราจัดเก็บข้อมูลส่วนบุคคลเพื่อยืนยันตัวตนว่าท่านเป็นผู้เดียวในการเข้าถึงบัญชีของท่าน
                      </li>
                      <li>
                        -
                        เราจัดเก็บข้อมูลส่วนบุคคลของท่านเพื่อวิจัยการตลาดและบริหารความสัมพันธ์ระหว่างผู้ให้บริการและผู้ใช้บริการ
                        (เผื่อสปอน)
                      </li>
                      <li>
                        -
                        เราจัดเก็บข้อมูลส่วนบุคคลของท่านเพื่อปฏิบัติตามข้อกฎหมาย
                        และระเบียบบังคับใช้ของรัฐ
                      </li>
                      <li>
                        -
                        เราจัดเก็บข้อมูลส่วนบุคคลของท่านเพื่อปฏิบัติตามกฎระเบียบที่ใช้บังคับกับผู้บริการ
                        รวมถึงการยินยอมให้ผู้ให้บริการสามารถโอนข้อมูลส่วนบุคคลให้แก่กลุ่มธุรกิจและพันธมิตรของผู้ให้บริการ
                        ผู้ประมวลผลข้อมูล หรือหน่วยงานใด ๆ
                        ที่มีสัญญากับผู้ให้บริการ (เผื่อสปอน)
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="mb-5">
                  <label for="policy" class="font-bold mb-1 text-gray-700 block"
                    >วัตถุประสงค์ในการประมวลผลข้อมูล
                  </label>

                  <div class="flex">
                    <ul class="ml-2">
                      <li>
                        - เมื่อได้รับข้อมูลส่วนบุคคลจากท่านแล้ว
                        เราจะดำเนินการดังนี้เก็บรวบรวมโดยมีการบันทึกในระบบคอมพิวเตอร์
                        ที่ใช้บริการ ได้แก่ Hostinger, Google sheet
                      </li>
                      <li>
                        -
                        เราจะใช้ข้อมูลส่วนบุคคลของท่านที่ได้เก็บรวบรวมมาในการดำเนินของสมาคมตามวัตถุประสงค์ที่ระบุไว้ในหัวข้อ
                        “วัตถุประสงค์ในการประมวลผลข้อมูล”
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="mb-5">
                  <label for="policy" class="font-bold mb-1 text-gray-700 block"
                    >วัตถุประสงค์ในการประมวลผลข้อมูล
                  </label>

                  <div class="flex">
                    <ul class="ml-2">
                      <li>
                        - เมื่อได้รับข้อมูลส่วนบุคคลจากท่านแล้ว
                        เราจะดำเนินการดังนี้เก็บรวบรวมโดยมีการบันทึกในระบบคอมพิวเตอร์
                        ที่ใช้บริการ ได้แก่ Hostinger, Google sheet
                      </li>
                      <li>
                        -
                        เราจะใช้ข้อมูลส่วนบุคคลของท่านที่ได้เก็บรวบรวมมาในการดำเนินของสมาคมตามวัตถุประสงค์ที่ระบุไว้ในหัวข้อ
                        “วัตถุประสงค์ในการประมวลผลข้อมูล”
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="mb-5">
                  <label for="policy" class="font-bold mb-1 text-gray-700 block"
                    >การแบ่งปันข้อมูล
                  </label>

                  <div class="flex">
                    <p>
                      เราใช้ผู้ให้บริการภายนอกเพื่อดำเนินการกับข้อมูลส่วนบุคคลของท่านในนามของเราเท่านั้น
                      การดำเนินการนี้เพื่อจุดประสงค์ที่ระบุไว้ในแถลงการณ์ความเป็นส่วนตัวนี้
                      ยกตัวอย่างเช่น การเก็บสถิติการใช้งาน การวิเคราะห์
                      หรือส่งข้อมูลการตลาด
                      ผู้ให้บริการเหล่านี้มีภาระผูกพันตามข้อตกลงการรักษาความลับและไม่ได้รับอนุญาตให้ใช้ข้อมูลส่วนบุคคลของท่านเพื่อจุดประสงค์ของผู้ดำเนินการเองหรือเพื่อจุดประสงค์อื่น
                    </p>
                  </div>
                </div>
                <div class="mb-5">
                  <label for="policy" class="font-bold mb-1 text-gray-700 block"
                    >การเก็บรักษาและระยะเวลาในการเก็บรักษาข้อมูลส่วนบุคคล
                  </label>
                  <p>
                    การเก็บรักษาข้อมูลส่วนบุคคลผู้ควบคุมทำการเก็บรักษาข้อมูลส่วนบุคคลของท่าน
                    ดังนี้
                  </p>
                  <div class="flex flex-col">
                    <ul>
                      <li>
                        ข้อมูลส่วนบุคคลที่ทางสมาคมจัดเก็บจะอยู่ในลักษณะของ Hard
                        Copy และ Soft Copy
                      </li>
                      <li>
                        ข้อมูลส่วนบุคคลจะถูกจัดเก็บไว้ในเครื่องมืออุปกรณ์ของคณะดำเนินงานภายใต้การดูแลของคณะเทคโนโลยีสารสนเทศ
                        สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง ได้แก่
                        คอมพิวเตอร์ โทรศัพท์มือถือ
                        รวมถึงมีการเก็บข้อมูลในบนระบบคอมพิวเตอร์ ซึ่งได้แก่
                        Hostinger, Google sheet
                      </li>
                      <li>
                        ระยะเวลาจัดเก็บ เป็นไปตามหัวข้อ
                        "ระยะเวลาในการประมวลผลข้อมูลส่วนบุคคล"
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="mb-5">
                  <label for="policy" class="font-bold mb-1 text-gray-700 block"
                    >สิทธิของเจ้าของข้อมูล
                  </label>

                  <div class="flex flex-col">
                    <p>ท่านมีสิทธิในการดำเนินการ ดังต่อไปนี้</p>
                    <ul class="ml-2">
                      <li>
                        - สิทธิในการได้รับแจ้ง (right to be informed) :
                        ท่านมีสิทธิที่จะได้รับแจ้งเมื่อข้อมูลส่วนบุคคลของท่านถูกจัดเก็บ
                        รวมถึงรายละเอียดต่าง ๆ ที่เกี่ยวข้อง อาทิ
                        วิธีการจัดเก็บและระยะเวลาการจัดเก็บ
                      </li>
                      <li>
                        - สิทธิในการเพิกถอนความยินยอม (right to withdraw
                        consent) :
                        ท่านมีสิทธิในการเพิกถอนความยินยอมในการประมวลผลข้อมูลส่วนบุคคลที่ท่านได้ให้ความยินยอมกับเราได้
                        ตลอดระยะเวลาที่ข้อมูลส่วนบุคคลของท่านอยู่กับเรา
                      </li>
                      <li>
                        - สิทธิในการเข้าถึงข้อมูลส่วนบุคคล (right of access) :
                        ท่านมีสิทธิในการเข้าถึงข้อมูลส่วนบุคคลของท่านและขอให้เราทำสำเนาข้อมูลส่วนบุคคลดังกล่าวให้แก่ท่าน
                        รวมถึงขอให้เราเปิดเผยการได้มาซึ่งข้อมูลส่วนบุคคลที่ท่านไม่ได้ให้ความยินยอมต่อเรา
                      </li>
                      <li>
                        - สิทธิในการแก้ไขข้อมูลผู้สมัครให้ถูกต้อง (right to
                        rectification) :
                        ท่านมีสิทธิในการขอให้เราแก้ไขข้อมูลที่ไม่ถูกต้องหรือเพิ่มเติมข้อมูลที่ไม่สมบูรณ์
                      </li>
                      <li>
                        - สิทธิในการลบข้อมูลส่วนบุคคล (right to erasure) :
                        ท่านมีสิทธิในการขอให้เราทำการลบข้อมูลของท่านด้วยเหตุบางประการได้
                      </li>
                      <li>
                        - สิทธิในการระงับการใช้ข้อมูลส่วนบุคคล (right to
                        restriction of processing) :
                        ท่านมีสิทธิในการระงับการใช้ข้อมูลส่วนบุคคลของท่านด้วยเหตุบางประการได้
                      </li>
                      <li>
                        - สิทธิในการให้โอนย้ายข้อมูลส่วนบุคคล (right to data
                        portability) :
                        ท่านมีสิทธิในการโอนย้ายข้อมูลส่วนบุคคลของท่านไปให้แก่ผู้ควบคุมข้อมูลรายอื่นหรือตัวท่านเองด้วยเหตุบางประการได้
                      </li>
                      <li>
                        - สิทธิในการคัดค้านการประมวลผลข้อมูลส่วนบุคคล (right to
                        object) :
                        ท่านมีสิทธิในการคัดค้านการประมวลผลข้อมูลส่วนบุคคลของท่านด้วยเหตุบางประการได้
                      </li>
                    </ul>
                    <p class="mt-2">
                      ท่านสามารถส่งคำขอมาที่อีเมล support@itcamp18.in.th
                      เพื่อดำเนินการยื่นคำร้องขอดำเนินการตามสิทธิข้างต้นได้ หรือ
                      ท่านสามารถศึกษารายละเอียดเงื่อนไข ข้อยกเว้นการใช้สิทธิต่าง
                      ๆ ได้ที่ แนวปฏิบัติเกี่ยวกับการคุ้มครองข้อมูลส่วนบุคคล
                      (TDPG2.0) และ เว็บไซต์กระทรวงดิจิทัลเพื่อเศรษฐกิจและสังคม
                      http://www.mdes.go.th ทั้งนี้
                      ท่านไม่จำเป็นต้องเสียค่าใช้จ่ายใด ๆ
                      ในการดำเนินตามสิทธิข้างต้น โดยเราจะพิจารณา
                      และแจ้งผลการพิจารณาคำร้องของท่านภายใน 30
                      วันนับแต่วันที่เราได้รับคำร้องขอดังกล่าว
                    </p>
                  </div>
                </div>

                <div class="mb-5">
                  <label for="policy" class="font-bold mb-1 text-gray-700 block"
                    >การยื่นคำร้องเพื่อการจัดการข้อมูลส่วนบุคคล
                  </label>

                  <div class="flex flex-col">
                    <p>
                      หากท่านมีความประสงค์ในการยื่นคำร้องเรียนเพื่อจัดการข้อมูลส่วนบุคคลของท่าน
                      ซึ่งรวมไปถึงการขอเข้าถึงข้อมูลส่วนบุคคล
                      การแก้ไขข้อมูลส่วนบุคคล
                      การขอเพิกถอนการยินยอมให้ข้อมูลส่วนบุคคล
                      และการส่งความคิดเห็นต่อการบริการ
                      ท่านสามารถติดต่อได้ทางเจ้าหน้าที่คุ้มครองข้อมูลส่วนบุคคลตามรายละเอียด
                      ได้ที่ support@itcamp18.in.th
                    </p>
                  </div>
                </div>
                <div class="flex items-center justify-center m-4">
                  <input
                    class="mr-2"
                    type="checkbox"
                    name="confirmPolicy"
                    id="confirmPolicy"
                    wire:model="policy_confirmation"
                  />
                  <label for="confirmPolicy">ยอมรับข้อตกลงมั้ยจ้ะ</label>
                </div>
              </div>
            </div>
            <!-- / Step Content -->
          </div>
        </div>

        <!-- Bottom Navigation -->
        <div class="fixed bottom-0 left-0 right-0 py-5 bg-white shadow-md" x-show="$wire.step != 4">
          <div class="max-w-3xl mx-auto px-4">
            <div class="flex justify-between">
              <div class="w-1/2">
                <button x-show="$wire.step > 1" @click="$wire.decrement()" wire:loading.attr="disabled" document.body.scrollTop = 0;" class="w-32 focus:outline-none py-2 px-5 rounded-lg shadow-sm text-center text-gray-600 bg-white hover:bg-gray-100 font-medium border">
                  ย้อนกลับ
                </button>
              </div>

              <div class="w-1/2 text-right">
                <button x-show="$wire.step < 3" @click="$wire.increment()" wire:loading.attr="disabled" document.body.scrollTop = 0;" class="w-32 focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium">
                  ถัดไป
                </button>

                <button @click="$wire.submit()" x-show="$wire.step === 3" wire:loading.attr="disabled" class="w-full md:w-64 focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium">
                  ยืนยันข้อมูลส่วนตัว
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- / Bottom Navigation https://placehold.co/300x300/e2e8f0/cccccc -->
      </div>
