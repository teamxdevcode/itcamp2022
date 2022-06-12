
      <div x-data="app()" x-cloak>
        <div class="max-w-3xl mx-auto px-4 pb-10 md:pt-10 md:pb-16">

          @if ($errors->any)
            {{$errors->first()}}
          @endif

          <div x-show.transition="$wire.step === 4">
            <div
              class="bg-white rounded-lg p-10 flex items-center shadow justify-between"
            >
              <div>
                <svg class="mb-4 h-20 w-20 text-green-500 mx-auto" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>

                <h2 class="text-2xl mb-4 text-gray-800 text-center font-bold">
                  ลงทะเบียนสำเร็จ
                </h2>

                <div class="text-gray-600 mb-8 min-w-full">
                  Thank you. We have sent you an email to support@itcamp18.in.th
                  Please click the link in the message to activate your account.
                </div>

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
            <div class="py-10">
              <div x-show.transition.in="$wire.step === 1">
                <div class="mb-5">
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

                <div class="mb-5">
                  <label for="lastname"class="font-bold mb-1 text-gray-700 block">นามสกุล</label>
                  <input
                    type="text"
                    class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                    placeholder="Enter your lastname..."
                    wire:model.lazy="data.surname"/>
                </div>

                <div class="mb-5">
                  <label for="email" class="font-bold mb-1 text-gray-700 block">อีเมล</label>
                  <input
                    type="email"
                    class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                    placeholder="Enter your email address..."
                    wire:model.lazy="data.email"
                  />
                </div>
                <div class="mb-5 flex md:space-x-3 flex-col md:flex-row">
                  <div class="w-full md:w-1/2">
                    <label for="dateofbirth"class="font-bold mb-1 text-gray-700 block">วัน เดือน ปี เกิด</label>
                    <input
                      type="date"
                      class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                      placeholder="Enter your date..."
                      wire:model.lazy="data.birthday"
                    />
                  </div>
                  <div class="w-full md:w-1/2">
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
                  <div class="w-full md:w-1/2">
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
                  <div class="w-full md:w-1/2 mt-5 md:mt-0">
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

                <div class="mb-5 flex md:space-x-3 flex-col md:flex-row">
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
                </div>
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
                  <label
                    for="school_confirmation"
                    class="font-bold mb-1 text-gray-700 block"
                  >
                    ใบรับรองผลการเรียน (เช่น ปพ.1 ปพ.7)
                  </label>
                  <div
                    class="relative bg-transparent w-full rounded-md border-dashed border border-gray-200"
                  >
                    <input
                      type="file"
                      name="file"
                      class="w-full min-h-[15em] block opacity-0 cursor-pointer"
                      wire:model.lazy="educational_certificate_file"
                    />
                    <!-- Blind เอาไว้ -->
                    <div
                      class="absolute space-y-3 flex flex-col items-center top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 pointer-events-none"
                    >
                      <svg
                        width="69"
                        height="60"
                        viewBox="0 0 69 60"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path d="M36.028 14.7458L36.1203 14.7733L36.1243 14.7688C36.5619 14.8481 36.9961 14.586 37.1247 14.1519C38.2963 10.2152 41.9874 7.46504 46.0998 7.46504C46.5867 7.46504 46.9816 7.07016 46.9816 6.5833C46.9816 6.09643 46.5867 5.70156 46.0998 5.70156C41.0457 5.70156 36.7985 9.06665 35.4348 13.6493C35.2956 14.1162 35.5615 14.6067 36.028 14.7458Z" fill="grey" stroke="#F9FFF9" stroke-width="0.3"/>
                        <path d="M56.3438 42.4384H51.9534C51.5494 42.4384 51.2217 42.1107 51.2217 41.7067C51.2217 41.3027 51.5494 40.9749 51.9534 40.9749H56.3438C62.3956 40.9749 67.3197 36.0509 67.3197 29.999C67.3197 23.9471 62.3956 19.023 56.3438 19.023H56.2382C56.026 19.023 55.8242 18.9311 55.6852 18.7706C55.5462 18.6101 55.4834 18.3974 55.5138 18.1873C55.5791 17.7315 55.612 17.2737 55.612 16.8279C55.612 11.5829 51.3444 7.31531 46.0995 7.31531C44.059 7.31531 42.1131 7.95296 40.4719 9.15978C40.1112 9.42478 39.599 9.30718 39.3905 8.91047C34.7425 0.0596993 22.6023 -1.12887 16.3082 6.57053C13.6568 9.81417 12.615 14.0336 13.4498 18.146C13.5418 18.6002 13.1942 19.0236 12.7327 19.0236H12.4395C6.3876 19.0236 1.46353 23.9477 1.46353 29.9996C1.46353 36.0514 6.3876 40.9755 12.4395 40.9755H16.8298C17.2338 40.9755 17.5615 41.3032 17.5615 41.7072C17.5615 42.1113 17.2338 42.439 16.8298 42.439H12.4395C5.5805 42.439 0 36.8585 0 29.9995C0 23.3329 5.27155 17.8742 11.8651 17.5731C11.2457 13.3066 12.4301 9.00295 15.1751 5.64437C21.9138 -2.5996 34.828 -1.67556 40.2871 7.51707C42.0287 6.42522 44.0215 5.85244 46.0992 5.85244C52.4538 5.85244 57.4892 11.261 57.0486 17.58C63.5813 17.9463 68.7829 23.3763 68.7829 29.999C68.7829 36.8585 63.2024 42.4384 56.3434 42.4384L56.3438 42.4384Z" fill="grey"/>
                        <path d="M15.85 41.2935C15.85 51.4634 24.1237 59.737 34.2935 59.737C44.4634 59.737 52.737 51.4633 52.737 41.2935C52.737 31.1235 44.4634 22.85 34.2935 22.85C24.1235 22.85 15.85 31.1237 15.85 41.2935ZM17.6138 41.2935C17.6138 32.0966 25.0964 24.6138 34.2935 24.6138C43.4904 24.6138 50.9732 32.0964 50.9732 41.2935C50.9732 50.4904 43.4904 57.9732 34.2935 57.9732C25.0966 57.9732 17.6138 50.4905 17.6138 41.2935Z" fill="grey" stroke="#F9FFF9" stroke-width="0.3"/>
                        <path d="M33.9428 48.6577C33.9428 49.0363 34.2499 49.3434 34.6285 49.3434C35.0071 49.3434 35.3142 49.0367 35.3142 48.6577V34.7291C35.3142 34.3504 35.0071 34.0434 34.6285 34.0434C34.2498 34.0434 33.9428 34.3504 33.9428 34.7291V48.6577Z" fill="#1ED760" stroke="white" stroke-width="0.3"/>
                        <path d="M34.6281 35.7001L30.8274 39.5008L34.6281 35.7001ZM34.6281 35.7001L38.4289 39.5009C38.5626 39.6346 38.7386 39.7017 38.9137 39.7017L34.6281 35.7001ZM29.8576 39.5009C30.1254 39.7687 30.5597 39.7689 30.8273 39.5009L38.9138 39.7017C39.0886 39.7017 39.2647 39.6352 39.3987 39.5009C39.6665 39.233 39.6665 38.799 39.3986 38.5311L35.113 34.2455C34.8452 33.9777 34.4108 33.9775 34.1432 34.2455C34.1432 34.2455 34.1431 34.2456 34.1431 34.2456L29.8576 38.5311C29.5897 38.799 29.5897 39.233 29.8576 39.5009Z" fill="#1ED760" stroke="white" stroke-width="0.3"/>
                      </svg>
                      <!-- รูปไฟล์ลองแก้  -->
                      <p class="mt-1 text-sm text-white">อัปโหลดไฟล์</p>
                      <span class="text-gray-500 text-[.5rem]"
                        >Supported formates: JPEG, PNG, PDF</span
                      >
                    </div>
                  </div>
                </div>
                <!--  -->
              </div>
              <div x-show.transition.in="$wire.step === 2">
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
                <div class="mb-5 flex md:space-x-3 flex-col md:flex-row">
                  <div class="w-full md:w-1/2 mb-5 md:mb-0">
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
                  <div class="w-full md:w-1/2 md:mb-0">
                    <label
                      for="whereKnowWe"
                      class="font-bold text-gray-700 block"
                      >รู้จัก ITCAMP ครั้งที่ 18 จากที่ไหนไหน</label
                    >
                    <select x-cloak id="select" class="hidden">
                      <option value="Facebook">Facebook</option>
                      <option value="Instagram">Instagram</option>
                      <option value="Twitter">Twitter</option>
                      <option value="Tiktok">Tiktok</option>
                      <option value="ToBeIT'66">ToBeIT'66</option>
                      <option value="เพื่อน">เพื่อน</option>
                      <option value="สถานศึกษา">สถานศึกษา</option>
                      <option value="ช่องทางอื่น">ช่องทางอื่น ๆ</option>
                    </select>

                    <div
                      x-data="dropdown()"
                      x-init="loadOptions()"
                      class="w-full flex flex-col items-center h-full mx-auto"
                    >
                      <input
                        name="values"
                        type="hidden"
                        x-bind:value="selectedValues()"
                      />
                      <div class="inline-block relative w-full">
                        <div class="flex flex-col relative">
                          <div x-on:click="open" class="w-full">
                            <div
                              class="mt-1 p-2 flex shadow-sm rounded-lg bg-white"
                            >
                              <div class="flex flex-auto flex-wrap">
                                <template
                                  x-for="(option,index) in selected"
                                  :key="options[option].value"
                                >
                                  <div
                                    class="flex justify-center items-center m-1 font-medium py-1 px-1 bg-white rounded border"
                                  >
                                    <div
                                      class="text-xs font-normal leading-none max-w-full flex-initial x-model="
                                      options[option]
                                      x-text="options[option].text"
                                    ></div>
                                    <div
                                      class="flex flex-auto flex-row-reverse"
                                    >
                                      <div
                                        x-on:click.stop="remove(index,option)"
                                      >
                                        <svg class="fill-current h-4 w-4" role="button" viewBox="0 0 20 20">
                                          <path d="M14.348,14.849c-0.469,0.469-1.229,0.469-1.697,0L10,11.819l-2.651,3.029c-0.469,0.469-1.229,0.469-1.697,0c-0.469-0.469-0.469-1.229,0-1.697l2.758-3.15L5.651,6.849c-0.469-0.469-0.469-1.228,0-1.697s1.228-0.469,1.697,0L10,8.183l2.651-3.031c0.469-0.469,1.228-0.469,1.697,0s0.469,1.229,0,1.697l-2.758,3.152l2.758,3.15C14.817,13.62,14.817,14.38,14.348,14.849z"/>
                                        </svg>
                                      </div>
                                    </div>
                                  </div>
                                </template>
                                <div
                                  x-show="selected.length == 0"
                                  class="flex-1"
                                >
                                  <input
                                    placeholder="เลือกช่องทาง"
                                    class="bg-transparent p-1 px-2 appearance-none outline-none h-full w-full text-gray-800"
                                    x-bind:value="selectedValues()"
                                    wire:model.lazy="data.known_us_from"
                                  />
                                </div>
                              </div>
                              <div
                                class="text-gray-300 w-8 py-1 pl-6 flex items-center"
                              >
                                <button
                                  type="button"
                                  x-show="isOpen() === true"
                                  x-on:click="open"
                                  class="cursor-pointer w-6 h-6 text-gray-600 outline-none focus:outline-none"
                                >
                                  <svg class="fill-current h-3 w-3" viewBox="0 0 20 20">
                                    <path d="M2.582,13.891c-0.272,0.268-0.709,0.268-0.979,0s-0.271-0.701,0-0.969l7.908-7.83c0.27-0.268,0.707-0.268,0.979,0l7.908,7.83c0.27,0.268,0.27,0.701,0,0.969c-0.271,0.268-0.709,0.268-0.978,0L10,6.75L2.582,13.891z"/>
                                  </svg>
                                </button>
                                <button
                                  type="button"
                                  x-show="isOpen() === false"
                                  @click="close"
                                  class="cursor-pointer w-6 h-6 text-gray-600 outline-none focus:outline-none"
                                >
                                  <svg version="1.1" class="fill-current h-3 w-3" viewBox="0 0 20 20">
                                    <path d="M17.418,6.109c0.272-0.268,0.709-0.268,0.979,0s0.271,0.701,0,0.969l-7.908,7.83c-0.27,0.268-0.707,0.268-0.979,0l-7.908-7.83c-0.27-0.268-0.27-0.701,0-0.969c0.271-0.268,0.709-0.268,0.979,0L10,13.25L17.418,6.109z"/>
                                  </svg>
                                </button>
                              </div>
                            </div>
                          </div>
                          <div class="w-full px-4">
                            <div
                              x-show.transition.origin.top="isOpen()"
                              class="absolute shadow top-100 bg-white z-40 w-full left-0 rounded max-h-select"
                              x-on:click.away="close"
                            >
                              <div
                                class="flex flex-col w-full overflow-y-auto h-64"
                              >
                                <template
                                  x-for="(option,index) in options"
                                  :key="option"
                                  class="overflow-auto"
                                >
                                  <div
                                    class="cursor-pointer w-full border-gray-100 rounded-t border-b hover:bg-gray-100"
                                    @click="select(index,$event)"
                                  >
                                    <div
                                      class="flex w-full items-center p-2 pl-2 border-transparent border-l-2 relative"
                                    >
                                      <div
                                        class="w-full items-center flex justify-between"
                                      >
                                        <div
                                          class="mx-2 leading-6"
                                          x-model="option"
                                          x-text="option.text"
                                        ></div>
                                        <div x-show="option.selected">
                                          <svg class="svg-icon" viewBox="0 0 20 20">
                                            <path fill="none" d="M7.197,16.963H7.195c-0.204,0-0.399-0.083-0.544-0.227l-6.039-6.082c-0.3-0.302-0.297-0.788,0.003-1.087C0.919,9.266,1.404,9.269,1.702,9.57l5.495,5.536L18.221,4.083c0.301-0.301,0.787-0.301,1.087,0c0.301,0.3,0.301,0.787,0,1.087L7.741,16.738C7.596,16.882,7.401,16.963,7.197,16.963z"></path>
                                          </svg>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </template>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mb-5">
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
                <div class="mb-5">
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
                @if (!in_array($data->subcamp, ['Webtopia','DataVergent','Game Runner','Nettapunk']))
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
                <button x-show="$wire.step > 1" @click="$wire.decrement()" document.body.scrollTop = 0;" class="w-32 focus:outline-none py-2 px-5 rounded-lg shadow-sm text-center text-gray-600 bg-white hover:bg-gray-100 font-medium border">
                  ย้อนกลับ
                </button>
              </div>

              <div class="w-1/2 text-right">
                <button x-show="$wire.step < 3" @click="$wire.increment()" document.body.scrollTop = 0;" class="w-32 focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium">
                  ถัดไป
                </button>

                <button @click="$wire.submit()" x-show="$wire.step === 3" class="w-full md:w-64 focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium">
                  ยืนยันข้อมูลส่วนตัว
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- / Bottom Navigation https://placehold.co/300x300/e2e8f0/cccccc -->
      </div>
