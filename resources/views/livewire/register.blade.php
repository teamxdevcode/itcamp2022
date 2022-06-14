
      <div x-data="app()" x-cloak>
        <div class="max-w-3xl mx-auto px-4 pb-10 md:pt-10 md:pb-16">

          @if ($errors->all())
            <div class="px-4 py-3 leading-normal text-red-100 bg-red-700 rounded-lg" role="alert">
              @if ($errors->has('policy_confirmation'))
              <p>{{$errors->first('policy_confirmation')}}</p>
              @else
              <p>ข้อมูลไม่ครบถ้วนหรือไม่ถูกต้อง</p>
              @endif
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
                  <x-inputs.input placeholder="ชื่อจริง" full="false" type="text" name="ชื่อจริง" binding="data.name"></x-inputs.input>
                  <x-inputs.input placeholder="นามสกุล" full="false" type="text" name="นามสกุล" binding="data.surname"></x-inputs.input>
                </div>

                <div class="flex md:space-x-3 flex-col md:flex-row">
                  <x-inputs.input placeholder="อีเมล" full="false" type="email" name="อีเมล" binding="data.email"></x-inputs.input>
                  <x-inputs.input placeholder="เบอร์โทรศัพท์มือถือ" full="false" type="tel" name="เบอร์โทรศัพท์มือถือ" binding="data.phone"></x-inputs.input>
                </div>

                <div class="flex md:space-x-3 flex-col md:flex-row">
                  <x-inputs.input placeholder="วันเกิด" full="false" type="date" name="วันเกิด" binding="data.birthday"></x-inputs.input>
                  <x-inputs.select full="false" name="เพศ" binding="data.gender" :options="[['Male','ชาย'],['Female','หญิง'],['LGBTQ+','LGBTQ+']]"></x-inputs.select>
                </div>
                <div class="flex md:space-x-3 flex-col md:flex-row">
                  <x-inputs.select full="false" name="ศาสนา" binding="data.religion" :options="[['Buddhism','พุทธ'],['Christianity','คริสต์'],['Islam','อิสลาม'],['Other','อื่น ๆ']]"></x-inputs.select>
                </div>
                <hr>
                <h1 class="text-lg font-bold text-gray-700 leading-tight my-4"># ข้อมูลที่อยู่ปัจจุบัน</h1>
                <div class="mb-5">
                  <x-inputs.textarea placeholder="ที่อยู่" full="false" name="ที่อยู่" binding="data.address" full="true"></x-inputs.textarea>
                </div>
                <div class="flex md:space-x-3 flex-col md:flex-row">
                  <x-inputs.input placeholder="ตำบล/แขวง" full="false" type="text" name="ตำบล/แขวง" binding="data.subdistrict"></x-inputs.input>
                  <x-inputs.input placeholder="อำเภอ/เขต" full="false" type="text" name="อำเภอ/เขต" binding="data.district"></x-inputs.input>
                </div>
                <div class="flex md:space-x-3 flex-col md:flex-row">
                  <x-inputs.input placeholder="จังหวัด" full="false" type="text" name="จังหวัด" binding="data.province"></x-inputs.input>
                </div>
                <hr>
                <h1 class="text-lg font-bold text-gray-700 leading-tight my-4"># ข้อมูลการศึกษา</h1>
                <div class="flex md:space-x-3 flex-col md:flex-row">
                  <x-inputs.input placeholder="โรงเรียน/สถานศึกษา" full="false" type="text" name="โรงเรียน/สถานศึกษา" binding="data.school" full='false'></x-inputs.input>
                </div>
                <div class="flex md:space-x-3 flex-col md:flex-row">
                  <x-inputs.select full="false" name="ระดับการศึกษา" binding="data.education_level" :options="[['M.4','ชั้นมัธยมศึกษาปีที่ 4'],['M.5','ชั้นมัธยมศึกษาปีที่ 5'],['M.6','ชั้นมัธยมศึกษาปีที่ 6'],['HVC.','ประกาศนียบัตรวิชาชีพ (ปวช.)']]"></x-inputs.select>
                  <x-inputs.input placeholder="แผนการเรียน/สาขาที่เรียน" full="false" type="text" name="แผนการเรียน/สาขาที่เรียน" binding="data.educational_program"></x-inputs.input>
                </div>
                <div class="mb-5">
                  <label for="school_confirmation" class="font-bold mb-1 text-gray-700 block">ใบรับรองผลการเรียน (ให้ไช้ ปพ.1 หรือ ปพ.7 เท่านั้น) @error('educational_certificate_file')<span class="text-white text-xs font-normal rounded bg-red-600 p-[.125rem] px-[.2rem] inline-block">{{$message}}</span> @enderror</label>
                  <div class="flex md:flex-row flex-col gap-5">
                    @if(isset(Auth::user()->registration->educational_certificate))
                    <div class="w-full md:w-1/2 flex flex-col items-center justify-center p-5 border border-gray-300 rounded-lg border-dashed">
                        @if (strtolower(pathinfo(substr("educational-certificates/".Auth::user()->registration->educational_certificate, 0, -4), PATHINFO_EXTENSION)) === 'pdf')
                        <a href="{{route('educational-certificate')}}" target="_blank" class="text-blue-500 hover:text-blue-400 underline">คลิกเพื่อดูไฟล์ปัจจุบัน</a>
                        @else
                        <a href="{{route('educational-certificate')}}" target="_blank"><img src="{{route('educational-certificate')}}"/></a>
                        @endif
                    </div>
                    @endif
                    <div class="w-full {{isset(Auth::user()->registration->educational_certificate) ? 'md:w-1/2' : ''}} flex items-start justify-center flex-col space-y-3">
											<h1>{{ isset(Auth::user()->registration->educational_certificate) ? 'อัพโหลดไฟล์ใหม่' : 'อัพโหลดไฟล์' }}</h1>
                      <input class="bg-white py-4 px-5 rounded-lg transition cursor-pointer shadow-sm w-full @error('educational_certificate_file')ring ring-red-600/50 ring-1 @enderror" type="file" wire:model="educational_certificate_file">
                      <span class="text-gray-500 text-sm text-center">รองรับไฟล์: JPEG, PNG และ PDF และมีขนาดไม่เกิน 1MB</span>
                    </div>
                  </div>
                </div>
                <!--  -->
              </div>
              <div x-show.transition.in="$wire.step === 2">
                <h1 class="text-lg font-bold text-gray-700 leading-tight my-4"># ข้อมูลทั่วไป</h1>
                <div class="mb-5">
                  <x-inputs.select full="false" name="ไซส์เสื้อที่ใส่" binding="data.shirt_size" :options="[['S','S'],['M','M'],['L','L'],['XL','XL'],['XXL','XXL'],['XXXL','XXXL']]"></x-inputs.select>
                </div>
                <div class="mb-5">
                  <label
                    for="firstname"
                    class="font-bold mb-1 text-gray-700 block"
                    >รู้จัก ITCAMP ครั้งที่ 18 จากที่ไหน @error('known_us_from')<span class="text-white text-xs font-normal rounded bg-red-600 p-[.125rem] px-[.2rem] inline-block">{{$message}}</span> @enderror</label
                  >
                  <div class="my-4 grid grid-cols-1">
                    <label class="inline-flex items-center cursor-pointer">
                      <input
                        name="Facebook"
                        class="text-green-500 w-5 h-5 mr-2 focus:ring-green-400 focus:ring-opacity-25 border border-gray-300 rounded"
                        type="checkbox"
                        value="Facebook"
                        wire:model.defer="known_us_from"
                      />
                      Facebook
                    </label>
                    <label class="inline-flex items-center cursor-pointer">
                      <input
                        name="Instagram"
                        class="text-green-500 w-5 h-5 mr-2 focus:ring-green-400 focus:ring-opacity-25 border border-gray-300 rounded"
                        type="checkbox"
                        value="Instagram"
                        wire:model.defer="known_us_from"
                      />
                      Instagram
                    </label>
                    <label class="inline-flex items-center cursor-pointer">
                      <input
                        name="TikTok"
                        class="text-green-500 w-5 h-5 mr-2 focus:ring-green-400 focus:ring-opacity-25 border border-gray-300 rounded"
                        type="checkbox"
                        value="TikTok"
                        wire:model.defer="known_us_from"
                      />
                      TikTok
                    </label>
                    <label class="inline-flex items-center cursor-pointer">
                      <input
                        name="ToBeIT'66"
                        class="text-green-500 w-5 h-5 mr-2 focus:ring-green-400 focus:ring-opacity-25 border border-gray-300 rounded"
                        type="checkbox"
                        value="ToBeIT'66"
                        wire:model.defer="known_us_from"
                      />
                      ToBeIT'66
                    </label>
                    <label class="inline-flex items-center cursor-pointer">
                      <input
                        name="Twitter"
                        class="text-green-500 w-5 h-5 mr-2 focus:ring-green-400 focus:ring-opacity-25 border border-gray-300 rounded"
                        type="checkbox"
                        value="Twitter"
                        wire:model.defer="known_us_from"
                      />
                      Twitter
                    </label>
                    <label class="inline-flex items-center cursor-pointer">
                      <input
                        name="เพื่อน"
                        class="text-green-500 w-5 h-5 mr-2 focus:ring-green-400 focus:ring-opacity-25 border border-gray-300 rounded"
                        type="checkbox"
                        value="Friends"
                        wire:model.defer="known_us_from"
                      />
                      เพื่อน
                    </label>
                    <label class="inline-flex items-center cursor-pointer">
                      <input
                        name="โรงเรียน"
                        class="text-green-500 w-5 h-5 mr-2 focus:ring-green-400 focus:ring-opacity-25 border border-gray-300 rounded"
                        type="checkbox"
                        value="School"
                        wire:model.defer="known_us_from"
                      />
                      โรงเรียน
                    </label>
                    <label class="inline-flex items-center cursor-pointer">
                      <input
                        name="ช่องทางอื่นๆ"
                        class="text-green-500 w-5 h-5 mr-2 focus:ring-green-400 focus:ring-opacity-25 border border-gray-300 rounded"
                        type="checkbox"
                        value="Other"
                        wire:model.defer="known_us_from"
                      />
                      ช่องทางอื่นๆ
                    </label>
                  </div>
                </div>
                <hr>
                <h1 class="text-lg font-bold text-gray-700 leading-tight my-4"># ข้อมูลสุขภาพ</h1>
                <div class="mb-5">
                  <x-inputs.input placeholder="โรคประจำตัว ( ถ้าไม่มีให้ตอบว่า ไม่มี )" type="text" name="โรคประจำตัว ( ถ้าไม่มีให้ตอบว่า ไม่มี )" full="true" binding="data.congenital_disease"></x-inputs.input>
                </div>
                <div class="mb-5">
                  <x-inputs.input type="text" name="ยาที่แพ้ ( ถ้าไม่มีให้ตอบว่า ไม่มี )" full="true" placeholder="ยาที่แพ้ เช่น สารประกอบหรือกลุ่มยา" binding="data.allergic_drug"></x-inputs.input>
                </div>
                <div class="mb-5">
                  <x-inputs.input placeholder="อาหารที่แพ้ ( ถ้าไม่มีให้ตอบว่า ไม่มี )" type="text" name="อาหารที่แพ้ ( ถ้าไม่มีให้ตอบว่า ไม่มี )" full="true" binding="data.allergen"></x-inputs.input>
                </div>
                <div class="flex md:space-x-3 flex-col md:flex-row">
                  <x-inputs.select full="false" name="หมู่โลหิต" binding="data.blood_type" :options="[['A','A'],['B','B'],['AB','AB'],['O','O']]"></x-inputs.select>
                </div>
                <hr>
                <h1 class="text-lg font-bold text-gray-700 leading-tight my-4"># ช่องทางการติดต่อฉุกเฉิน</h1>
                <div class="flex md:space-x-3 flex-col md:flex-row">
                  <x-inputs.input placeholder="ชื่อจริง (ผู้ติดต่อฉุกเฉิน)" full="false" type="text" name="ชื่อจริง (ผู้ติดต่อฉุกเฉิน)" binding="data.emergency_name"></x-inputs.input>
                  <x-inputs.input placeholder="นามสกุล (ผู้ติดต่อฉุกเฉิน)" full="false" type="text" name="นามสกุล (ผู้ติดต่อฉุกเฉิน)" binding="data.emergency_surname"></x-inputs.input>
                </div>
                <div class="flex md:space-x-3 flex-col md:flex-row">
                  <x-inputs.input placeholder="เบอร์โทรศัพท์มือถือ (ผู้ติดต่อฉุกเฉิน)" full="false" type="text" name="เบอร์โทรศัพท์มือถือ (ผู้ติดต่อฉุกเฉิน)" binding="data.emergency_phone"></x-inputs.input>
                  <x-inputs.input placeholder="ความเกี่ยวข้อง (ผู้ติดต่อฉุกเฉิน)" full="false" type="text" name="ความเกี่ยวข้อง (ผู้ติดต่อฉุกเฉิน)" binding="data.emergency_relationship"></x-inputs.input>
                </div>
                @if (!in_array(Auth::user()->registration?->subcamp, ['Webtopia','DataVergent','Game Runner','Nettapunk']))
                <hr>
                <h1 class="text-lg font-bold text-gray-700 leading-tight mt-4"># เลือกค่ายย่อย @error('data.subcamp')<span class="text-white text-xs font-normal rounded bg-red-600 p-[.125rem] px-[.2rem] inline-block">{{$message}}</span> @enderror</h1>
                <p class="mb-4 text-red-700 text-sm">สำคัญ! ค่ายย่อยสามารถเลือกได้เพียงครั้งเดียวและไม่สามารถเปลี่ยนแปลงได้ภายหลัง</p>
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
                      class="flex justify-start items-center text-truncate rounded-lg bg-white pl-4 pr-6 py-3 shadow-sm cursor-pointer"
                    >
                      <div class="text-teal-600 mr-3">
                        <input
                          type="radio"
                          value="Webtopia"
                          class="form-radio focus:outline-none focus:shadow-outline cursor-pointer"
                          name="subcamp-selection"
                          wire:model.defer="data.subcamp"
                        />
                      </div>
                      <div class="select-none text-gray-700">Webtopia</div>
                    </label>

                    <label
                      class="flex justify-start items-center text-truncate rounded-lg bg-white pl-4 pr-6 py-3 shadow-sm cursor-pointer"
                    >
                      <div class="text-teal-600 mr-3">
                        <input
                          type="radio"
                          value="DataVergent"
                          class="form-radio focus:outline-none focus:shadow-outline cursor-pointer"
                          name="subcamp-selection"
                          wire:model.defer="data.subcamp"
                        />
                      </div>
                      <div class="select-none text-gray-700">DataVergent</div>
                    </label>

                    <label
                      class="flex justify-start items-center text-truncate rounded-lg bg-white pl-4 pr-6 py-3 shadow-sm cursor-pointer"
                    >
                      <div class="text-teal-600 mr-3">
                        <input
                          type="radio"
                          value="Game Runner"
                          class="form-radio focus:outline-none focus:shadow-outline cursor-pointer"
                          name="subcamp-selection"
                          wire:model.defer="data.subcamp"
                        />
                      </div>
                      <div class="select-none text-gray-700">Game Runner</div>
                    </label>

                    <label
                      class="flex justify-start items-center text-truncate rounded-lg bg-white pl-4 pr-6 py-3 shadow-sm cursor-pointer"
                    >
                      <div class="text-teal-600 mr-3">
                        <input
                          type="radio"
                          value="Nettapunk"
                          class="form-radio focus:outline-none focus:shadow-outline cursor-pointer"
                          name="subcamp-selection"
                          wire:model.defer="data.subcamp"
                        />
                      </div>
                      <div class="select-none text-gray-700">Nettapunk</div>
                    </label>
                  </div>
                </div>
                @endif
              </div>
              <div x-show.transition.in="$wire.step === 3">
                <div>
                  <div class="mb-5">
                    <label for="policy" class="mb-1 block font-bold text-gray-700">คุณสมบัติของผู้สมัครเข้าร่วมโครงการ </label>
                    <ul class="ml-2">
                      <li>1. ผู้สมัครต้องเป็นนักเรียนระดับมัธยมศึกษาตอนปลาย หรือ ปวช. เท่านั้น</li>
                      <li>2. ผู้สมัครสามารถเข้าร่วมการอบรมได้ตลอดระยะเวลา 4 วัน 3 คืน โดยได้รับการยินยอมจากผู้ปกครอง</li>
                      <li>3. เป็นผู้ที่ได้รับวัคซีน COVID-19 อย่างน้อย 2 เข็มก่อนวันค่ายอย่างน้อย 14 วัน ทั้งนี้ผู้สมัครต้องส่งหลักฐานการได้รับวัคซีนเมื่อถูกร้องขอ</li>
                      <li>
                        4. ไม่อยู่ในกลุ่มเสี่ยงติดเชื้อ COVID-19 ในช่วงก่อนวันจัดกิจกรรมตามเงื่อนไข ดังนี้
                        <ul class="ml-2">
                          <li>- ไม่มีอาการบ่งชี้โรคติดเชื้อไวรัสโคโรนา 2019 (COVID-19) เช่น ไข้ ไอ มีน้ำมูก เจ็บคอ คอแห้ง อ่อนเพลีย ปวดเมื่อย ท้องเสีย ตาแดง ผื่นขึ้น หรือเหงื่อออกตอนกลางคืน</li>
                          <li>- ไม่มีประวัติสัมผัสกับผู้ป่วยที่ยืนยันถึงการเป็นโรคติดเชื้อไวรัสโคโรนา 2019 (COVID-19) เป็นเวลาอย่างน้อย 14 วัน ก่อนวันจัดกิจกรรม</li>
                        </ul>
                      </li>
                      <li>5. มีผลตรวจเชื้อเป็นลบเมื่อตรวจเชื้อด้วยชุดตรวจเชื้อ SARS-CoV-2 (เชื้อก่อโรค COVID-19) แบบตรวจหาแอนติเจนด้วยตนเอง (COVID-19 Antigen test self-test kits) ภายใน 72 ชั่วโมง ก่อนวันจัดกิจกรรม ทั้งนี้ผู้สมัครต้องส่งผลตรวจเชื้อเมื่อถูกร้องขอ</li>
                    </ul>
                  </div>

                  <div class="mb-5">
                    <label for="policy" class="mb-1 block font-bold text-gray-700">การสมัครเข้าร่วมโครงการ </label>

                    <div class="flex flex-col">
                      <ul class="ml-2">
                        <li>1. สมัครได้ตั้งแต่วันที่ 13 มิถุนายน 2565 ถึงวันที่ 25 มิถุนายน 2565</li>
                        <li>
                          2. ค่ายที่รับสมัครมีทั้งหมด 4 ค่าย ได้แก่
                          <ul class="ml-2">
                            <li>- Webtopia</li>
                            <li>- Datavergent</li>
                            <li>- Game Runner</li>
                            <li>- Nettapunk</li>
                          </ul>
                        </li>
                        <li>3. ผู้สมัครสามารถสมัครได้เพียง 1 ค่ายเท่านั้น โดยการเลือกค่ายจะอยู่ในขั้นตอนที่ 2 ของระบบรับสมัคร หากมีการยืนยันการเลือกค่ายและผ่านขั้นตอนที่ 2 แล้ว ผู้สมัครจะไม่สามารถเปลี่ยนค่ายได้อีก</li>
                        <li>4. การสมัครจะเสร็จสมบูรณ์ก็ต่อเมื่อสิ้นสุดเวลารับสมัครแล้วเท่านั้น ระหว่างช่วงเวลารับสมัคร ผู้สมัครสามารถเข้าไปแก้ไขข้อมูลและคำตอบของท่านได้</li>
                        <li>5. ข้อมูลของผู้สมัครทุกคนจะถูกคุ้มครองตามนโยบายคุ้มครองข้อมูลส่วนบุคคล</li>
                      </ul>
                    </div>
                  </div>

                  <div class="mb-5">
                    <label for="policy" class="mb-1 block font-bold text-gray-700">การคัดเลือกเข้าร่วมโครงการ</label>

                    <div class="flex flex-col">
                      <ul class="ml-2">
                        <li>
                          <ul class="ml-2">
                            <li>1. ผู้สมัครจะผ่านการคัดเลือกโดยการพิจารณาจากการตอบคำถาม และคุณสมบัติตรงตามที่โครงการกำหนด</li>
                            <li>2. คณะกรรมการจะคัดเลือกผู้มีสิทธิ์เข้าร่วมโครงการทั้งหมด 4 ค่ายย่อย ค่ายละ 15 คน รวมผู้เข้าร่วมโครงการทั้งสิ้น 60 คน โดยประกาศรายชื่อผู้ผ่านการคัดเลือกที่เว็บไซต์ <span class="text-red-700">itcamp18.in.th</span> ในวันที่ 29 มิถุนายน 2565</li>
                            <li>3. การตัดสินของคณะกรรมการถือเป็นที่สิ้นสุด</li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="mb-5">
                    <label for="policy" class="mb-1 block font-bold text-gray-700">รายละเอียดการเข้าร่วมโครงการ
                   </label>

                    <div class="flex">
                      <ul class="ml-2">
                        <li>1. ผู้มีสิทธิ์เข้าร่วมโครงการต้องโอนเงินชำระค่าสมัคร เพื่อเป็นการยืนยันสิทธิ์จำนวน 500 บาท</li>
                        <li>2. ผู้มีสิทธิ์เข้าร่วมโครงการต้องส่งเอกสารหลักฐานการฉีดวัคซีน (หมอพร้อม) อย่างน้อย 2 เข็ม เพื่อเข้าร่วมโครงการ</li>
                        <li>3. ผู้จัดงานขอสงวนสิทธิ์ในการเปลี่ยนแปลง แก้ไขรายละเอียดกิจกรรมในครั้งนี้ หรือข้อกำหนดและเงื่อนไขต่าง ๆ ที่เกี่ยวข้องตามดุลพินิจของผู้จัดงาน โดยไม่ต้องแจ้งให้ทราบล่วงหน้า</li>
                      </ul>
                    </div>
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
                  <label for="confirmPolicy">รับทราบและยอมรับข้อตกลงทั้งหมด</label>
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
