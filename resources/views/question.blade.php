@extends('layouts.app')
@section('main')
    <div class="h-full">
      <div x-data="app()" x-cloak>
        <div class="max-w-3xl mx-auto px-4 pb-10 md:pt-10 md:pb-16">
          <div x-show.transition="step === 'complete'">
            <div
              class="bg-white rounded-lg p-10 flex items-center shadow justify-between"
            >
              <div>
                <svg
                  class="mb-4 h-20 w-20 text-green-500 mx-auto"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                >
                  <path
                    fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                    clip-rule="evenodd"
                  />
                </svg>

                <h2 class="text-2xl mb-4 text-gray-800 text-center font-bold">
                  ลงทะเบียนสำเร็จ
                </h2>

                <div class="text-gray-600 mb-8 min-w-full">
                  Thank you. We have sent you an email to support@itcamp18.in.th
                  Please click the link in the message to activate your account.
                </div>
                x

                <button
                  @click="window.location.href='menu.html'"
                  class="w-40 block mx-auto focus:outline-none py-2 px-5 rounded-lg shadow-sm text-center text-gray-600 bg-white hover:bg-gray-100 font-medium border"
                >
                  กลับหน้าหลัก
                </button>
              </div>
            </div>
          </div>

          <div x-show.transition="step != 'complete'">
            <!-- Top Navigation -->
            <div class="border-b-2 py-4">
              <div
                class="uppercase tracking-wide text-xs font-bold text-gray-500 mb-1 leading-tight"
                x-text="`หน้าที่: ${step} จาก 4`"
              ></div>
              <div
                class="flex flex-col md:flex-row md:items-center md:justify-between"
              >
                <div class="flex-1">
                  <div x-show="step === 1">
                    <div class="text-lg font-bold text-gray-700 leading-tight">
                      คำถามส่วนกลาง
                    </div>
                  </div>

                  <div x-show="step === 2">
                    <div class="text-lg font-bold text-gray-700 leading-tight">
                      คำถามค่ายย่อย
                    </div>
                  </div>

                  <div x-show="step === 3">
                    <div class="text-lg font-bold text-gray-700 leading-tight">
                      ยืนยัน
                    </div>
                  </div>
                </div>

                <div class="flex items-center md:w-64">
                  <div class="w-full bg-white rounded-full mr-2">
                    <div
                      class="rounded-full bg-green-500 text-xs leading-none h-2 text-center text-white"
                      :style="'width: '+ parseInt(step / 3 * 100) +'%'"
                    ></div>
                  </div>
                  <div
                    class="text-xs w-10 text-gray-600"
                    x-text="parseInt(step / 3 * 100) +'%'"
                  ></div>
                </div>
              </div>
            </div>
            <!-- /Top Navigation -->

            <!-- Step Content -->
            <div class="py-10">
              <div x-show.transition.in="step === 1">
                <div class="mb-5">
                  <label for="mainq1" class="font-bold mb-1 text-gray-700 block"
                    >1. ถ้าน้องจะอธิบายนิสัยของตนเองด้วยคำสั้นๆ จะใช้คำว่าอะไร
                    เพราะอะไร? (เช่น ร่าเริง, ขี้อาย, บ้าพลัง)
                  </label>
                  <textarea
                    class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                    name="mainq1"
                    id="mainq1"
                    cols="30"
                    rows="8"
                  ></textarea>
                </div>
                <div class="mb-5">
                  <label for="mainq2" class="font-bold mb-1 text-gray-700 block"
                    >2. ถ้าคะแนนเต็ม 10 คะแนน น้องๆจะให้คะแนนความอยากมาค่าย IT
                    camp 18 เท่าไหร่ เพราะเหตุใด
                  </label>
                  <textarea
                    class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                    name="mainq2"
                    id="mainq2"
                    cols="30"
                    rows="8"
                  ></textarea>
                </div>
                <div class="mb-5">
                  <label for="mainq3" class="font-bold mb-1 text-gray-700 block"
                    >3. หากได้รับการคัดเลือกเข้าร่วม ค่าย IT camp 18
                    แล้วพบว่าไม่มีคนรู้จักในค่ายเลย ยังจะตัดสินใจเข้าร่วมหรือไม่
                    เพราะเหตุใด
                  </label>
                  <textarea
                    class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                    name="mainq3"
                    id="mainq3"
                    cols="30"
                    rows="8"
                  ></textarea>
                </div>
                <div class="mb-5">
                  <label for="mainq4" class="font-bold mb-1 text-gray-700 block"
                    >4. ถ้าน้องได้ตื่นขึ้นมาในโลกที่เหนือจินตนาการ
                    น้องคิดว่าโลกนั้นจะเป็นแบบไหน
                    และจะทำอะไรเป็นอย่างแรกในโลกแห่งนั้น?
                  </label>
                  <textarea
                    class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                    name="mainq4"
                    id="mainq4"
                    cols="30"
                    rows="8"
                  ></textarea>
                </div>
              </div>
              <div x-show.transition.in="step === 2">
                <div class="mb-5">
                  <label for="mainq4" class="font-bold mb-1 text-gray-700 block"
                    >4. ถ้าน้องได้ตื่นขึ้นมาในโลกที่เหนือจินตนาการ
                    น้องคิดว่าโลกนั้นจะเป็นแบบไหน
                    และจะทำอะไรเป็นอย่างแรกในโลกแห่งนั้น?
                  </label>
                  <textarea
                    class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                    name="mainq4"
                    id="mainq4"
                    cols="30"
                    rows="8"
                  ></textarea>
                </div>
              </div>
              <div x-show.transition.in="step === 3">
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
                  />
                  <label for="confirmPolicy">ยอมรับข้อตกลงมั้ยจ้ะ</label>
                </div>
              </div>
            </div>
            <!-- / Step Content -->
          </div>
        </div>

        <!-- Bottom Navigation -->
        <div
          class="fixed bottom-0 left-0 right-0 py-5 bg-white shadow-md"
          x-show="step != 'complete'"
        >
          <div class="max-w-3xl mx-auto px-4">
            <div class="flex justify-between">
              <div class="w-1/2">
                <button
                  x-show="step > 1"
                  @click="step--; document.body.scrollTop = 0;"
                  class="w-32 focus:outline-none py-2 px-5 rounded-lg shadow-sm text-center text-gray-600 bg-white hover:bg-gray-100 font-medium border"
                >
                  ย้อนกลับ
                </button>
              </div>

              <div class="w-1/2 text-right">
                <button
                  x-show="step < 3"
                  @click="step++; document.body.scrollTop = 0;"
                  class="w-32 focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium"
                >
                  ถัดไป
                </button>

                <button
                  @click="step = 'complete'"
                  x-show="step === 3"
                  class="w-full md:w-64 focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium"
                >
                  ยืนยันข้อมูลส่วนตัว
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- / Bottom Navigation https://placehold.co/300x300/e2e8f0/cccccc -->
      </div>
    </div>

    <script>
      function app() {
        return {
          step: 1,
          passwordStrengthText: "",
          togglePassword: false,
          foodAllergy: "No",
          medAllergy: "No",

          image:
            "data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEAAAAAAAD/4QBCRXhpZgAATU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAAkAAAAMAAAABAAAAAEABAAEAAAABAAAAAAAAAAAAAP/bAEMACwkJBwkJBwkJCQkLCQkJCQkJCwkLCwwLCwsMDRAMEQ4NDgwSGRIlGh0lHRkfHCkpFiU3NTYaKjI+LSkwGTshE//bAEMBBwgICwkLFQsLFSwdGR0sLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLP/AABEIAdoB2gMBIgACEQEDEQH/xAAfAAABBQEBAQEBAQAAAAAAAAAAAQIDBAUGBwgJCgv/xAC1EAACAQMDAgQDBQUEBAAAAX0BAgMABBEFEiExQQYTUWEHInEUMoGRoQgjQrHBFVLR8CQzYnKCCQoWFxgZGiUmJygpKjQ1Njc4OTpDREVGR0hJSlNUVVZXWFlaY2RlZmdoaWpzdHV2d3h5eoOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4eLj5OXm5+jp6vHy8/T19vf4+fr/xAAfAQADAQEBAQEBAQEBAAAAAAAAAQIDBAUGBwgJCgv/xAC1EQACAQIEBAMEBwUEBAABAncAAQIDEQQFITEGEkFRB2FxEyIygQgUQpGhscEJIzNS8BVictEKFiQ04SXxFxgZGiYnKCkqNTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqCg4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2dri4+Tl5ufo6ery8/T19vf4+fr/2gAMAwEAAhEDEQA/APTmZsnmk3N60N1NJTELub1o3N60lFAC7m9aNzetJRQAu5vWjc3rSUUALub1o3N60lFAC7m9aNzetJRQAu5vWjc3rSUUALub1o3N60lFAC7m9aNzetJRQAu5vWjc3rSUUALub1o3N60lFAC7m9aNzetJRQAu5vWjc3rSUUALub1o3N60lFAC7m9aNzetJRQAu5vWjc3rSUUALub1o3N60lFAC7m9aNzetJRQAu5vWjc3rSUUALub1o3N60lFAC7m9aNzetJRQAu5vWjc3rSUUALub1o3N60lJQA7c3rSbm9aSigBdzetG4+tJRQAZPrRuPrSUUALub1/lRub1pKSgBdzUbm9aSigBdzetG5vX+VJSUALub1/lUu5qhqXj1oAG6mkpW6mkoAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooASiiigAooooAKSiigAooo+lACUZoooAKKKSgAo/rRSUALUlRVJz60AObqaSlbqaSgAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACkoooAKKKKACiikoAKSlooASiiigA+lHpRQaACkoooATmilpPegBP/ANdS5HrUdSfL7UAObqaSlbqaSgAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKSiigAooooAKKKKAEooooASij60UAFFFHpQAUmaKPxoAKSlpPWgA/wAmk/pS/Sk47dqADpUvPvUXrUn4H8qAHt1NJSt1NJQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFISFBJIAHUk4FAC0VTlv4EyEBc+3C/nVSS9uX6MEHonX8zQBrEqvLEAe5A/nUTXVqvWVfwyf5VjFmY5Ykn3JP86SmBrG/tB3c/RTTf7QtvST8hWXRQBqi/te+8f8AAc09by0b/loB/vAiseigDeV43+66t9CDTq5/p04+lTJdXMfSQkej/MP1oA2qKoR6gpwJUK/7Scj8utXEkjkG5GDD2P8AMUgH0UUUAFFFJQAUUUUAFFFJQAtJRRQAUlFFABR2oo+lAB1pKKP60AFFFFACUHjNH/66KAEpaSj/APVQAc0/I9KZUufpQA5uppKVuppKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACimsyopZiAo5JNZlxePLlI8rH0J/ib60AWp72KLKph3/wDHR9TWdLNNMcuxPoOij6Co6KYBRRRQAUUUUAFFFFABRRRQAUUUUAFKruhDIxUjuDikooA0IL/os4/4Gv8AUVfBVgCpBB6Ecg1gVLBcSwH5eUP3lPQ/SgDaoqOKaOZdyH/eB6qfepKQBRRRQAlFFFABSUUUAFFFFABRRSf5NABxR6e1FJQAcUUUnP6UALSf5/GjvRz+FAB06d6KT6UGgA96kyf8mo//ANdP59P1oAlbqaSlbqaSgAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACmu6RqzucKvJNKSACScADJJ7Csi6uDO2BkRqflHr7mgBLi5edu4QH5V/qagoopgFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFACUUUUAPjkkiYOhwR+RHoa14J0nTI4YffX0NYtPileJ1dDyOoPQj0NAG7SUyKVJkDr36juD6U+kAUhoooAKKKKACij/JpKACj/PNFFABScUelFACUdqP8mj+dABn9KMjij60d+tACf5FH5Uf59qOOlACfhUn40zmn4oAlbqaSlbqaSgAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKhuJhDEz/xfdQerGgCpfXGT5CHgf6w+/8AdqhQSSSScknJPqTRTAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACkoooAKKKKACiiigCe2nMEnP+rbhx6e9bHoQevT3zXP1p2M+9DE33k5X/AHf/AK1AF2koNFIAoopKAFpKKPSgApPX0pf8mkoAKKTPP1paAE+lFFIT/ntQAelHAoz0oz/hQAd6T155oooAKk2+wqLPt/8AWqTj1P5GgCZuppKVuppKACiiigAooooAKKKKACiiigAooooAKKKKACiiigArJvpd8uwH5Y+P+BHrWnK4jjkc/wAKkj69qwiSSSepJJ+ppgFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABSUUUAFFFFABRRSUAFFFFABT4pDFIkg/hPPuO4plFAG8CGAYchgCD7HmlqpYy74dp6xnH4HkVapALSUUUAH+NFFJQAc0f5+tHFJQAUUUepoAP/r0nP/1sUH1ozQAUnOaPwo9OlAAcd6T60tJQAHn+lSZPotR/55qTJ/yKAJm6mkpW6mkoAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAKWoPiNE/vtk/RazKt6g2Zgv9xB+Z5qpTAKKKKACiiigAooooAKKKKA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",
          password: "",
          gender: "Male",
          subcamp: "",

          checkPasswordStrength() {
            var strongRegex = new RegExp(
              "^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})"
            );
            var mediumRegex = new RegExp(
              "^(((?=.*[a-z])(?=.*[A-Z]))|((?=.*[a-z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[0-9])))(?=.{6,})"
            );

            let value = this.password;

            if (strongRegex.test(value)) {
              this.passwordStrengthText = "Strong password";
            } else if (mediumRegex.test(value)) {
              this.passwordStrengthText = "Could be stronger";
            } else {
              this.passwordStrengthText = "Too weak";
            }
          },
        };
      }
      function toggle() {
        var e = document.getElementById("condition_confirm");
        e.classList.toggle("hidden");
      }
      function toggleNav() {
        var e = document.getElementById("navbar");
        e.classList.toggle("hidden");
      }
      function dropdown() {
        return {
          options: [],
          selected: [],
          show: false,
          etc: false,
          open() {
            this.show = true;
          },
          close() {
            this.show = false;
          },
          isOpen() {
            return this.show === true;
          },
          select(index, event) {
            if (!this.options[index].selected) {
              this.options[index].selected = true;
              this.options[index].element = event.target;
              this.selected.push(index);
            } else {
              this.selected.splice(this.selected.lastIndexOf(index), 1);
              this.options[index].selected = false;
            }
          },
          remove(index, option) {
            this.options[option].selected = false;
            this.selected.splice(index, 1);
          },
          loadOptions() {
            const options = document.getElementById("select").options;
            for (let i = 0; i < options.length; i++) {
              this.options.push({
                value: options[i].value,
                text: options[i].innerText,
                selected:
                  options[i].getAttribute("selected") != null
                    ? options[i].getAttribute("selected")
                    : false,
              });
            }
          },
          selectedValues() {
            return this.selected.map((option) => {
              return this.options[option].value;
            });
          },
        };
      }
    </script>
@endsection
