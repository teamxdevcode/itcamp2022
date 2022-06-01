<div class="w-full flex items-center justify-center flex-col space-y-6">
	<h1 class="text-blue-500 font-bold text-3xl underline underline-offset-8">ลงทะเบียนเข้าค่าย</h1>
	<form action="" class=" bg-white w-3/5">
		<div class="py-5 px-8 flex justify-between items-center rounded-t-md border border-gray-300 shadow-md">
			<ul class="flex space-x-5">
				<li class="px-4 py-2 rounded-md outline outline-offset-2 outline-2 outline-blue-500 bg-blue-500 text-white text-xl">1</li>
				<li class="px-4 py-2 rounded-md border border-blue-500 bg-blue-200 text-white text-xl">2</li>
			</ul>
			<span class="text-xl font-semibold text-blue-500">{{$pages[$currentPage]['heading']}}</span>
		</div>
		@if ($currentPage === 1)
		<div class="px-8 rounded-b-md border-r border-b border-l border-gray-300 shadow-md divide-y">
			<div class="py-10 space-y-10 ">
				<div class="flex justify-between items-center">
					<label for="fname" class="text-xl text-blue-500 w-1/2">ชื่อจริง</label>
					<div class="text-xl w-1/2">
						<input id="fname" type="text" name="firstname" value="Jeremy" class="input-form-reg">
					</div>
				</div>
				<div class="flex justify-between items-center ">
					<label for="lname" class="text-xl text-blue-500 w-1/2">นามสกุล</label>
					<div class="text-xl w-1/2">
						<input id="lname" type="text" class="input-form-reg">
					</div>
				</div>
				<div class="flex justify-between items-center ">
					<label for="nick" class="text-xl text-blue-500 w-1/2">ชื่อเล่น</label>
					<div class="text-xl w-1/2">
						<input id="nick" type=" text" class="input-form-reg">
					</div>
				</div>
			</div>
			<div class="py-10 space-y-10 ">
				<div class="flex justify-between items-center">
					<label for="dateofbirth" class="text-xl text-blue-500 w-1/2">วันเกิด</label>
					<div class="text-xl w-1/2">
						<input id="dateofbirth" type=" text" class="input-form-reg">
					</div>
				</div>
				<div class="flex justify-between items-center ">
					<label for="gender" class="text-xl text-blue-500 w-1/2">เพศ</label>
					<div class="text-xl w-1/2">
						<input id="gender" type="text" class="input-form-reg">
					</div>
				</div>
				<div class="flex justify-between items-center ">
					<label for="bloodgroup" class="text-xl text-blue-500 w-1/2">กรุ๊ปเลือด</label>
					<div class="text-xl w-1/2">
						<input id="bloodgroup" type="text" class="input-form-reg">
					</div>
				</div>
				<div class="flex justify-between items-center ">
					<label for="religion" class="text-xl text-blue-500 w-1/2">ศาสนา</label>
					<div class="text-xl w-1/2">
						<input id="religion" type="text" class="input-form-reg">
					</div>
				</div>
			</div>
		</div>
		@elseif ($currentPage === 2)
		<div class="px-8 rounded-b-md border-r border-b border-l border-gray-300 shadow-md">
			<div class="py-10 space-y-10">
				<div class="flex justify-between items-center">
					<h1 class="text-xl text-blue-500">2</h1>
					<div class="space-x-5 text-xl">
						<button class="px-16 py-3 bg-blue-500 text-white rounded-md outline outline-offset-2 outline-2 outline-blue-500">มี</button>
						<button class="px-16 py-3 bg-blue-200 text-blue-500 rounded-md">ไม่มี</button>
					</div>
				</div>
				<div class="flex justify-between items-center">
					<h1 class="text-xl text-blue-500">2</h1>
					<div class="space-x-5 text-xl">
						<input type="text" class="border-blue-500 border-2 w-full px-3 py-2 rounded-md mr-6">
					</div>
				</div>
			</div>
		</div>
		@elseif ($currentPage === 3)
		<div class="px-8 rounded-b-md border-r border-b border-l border-gray-300 shadow-md">
			<div class="py-10 space-y-10">
				<div class="flex justify-between items-center">
					<h1 class="text-xl text-blue-500">โรคประจำตัว</h1>
					<div class="space-x-5 text-xl">
						<button class="px-16 py-3 bg-blue-500 text-white rounded-md outline outline-offset-2 outline-2 outline-blue-500">มี</button>
						<button class="px-16 py-3 bg-blue-200 text-blue-500 rounded-md">ไม่มี</button>
					</div>
				</div>
				<div class="flex justify-between items-center">
					<h1 class="text-xl text-blue-500">โรคประจำตัว</h1>
					<div class="space-x-5 text-xl">
						<input type="text" class="border-blue-500 border-2 w-full px-3 py-2 rounded-md mr-6">
					</div>
				</div>
			</div>
		</div>
		@endif
	</form>
	<div class="flex items-center justify-between w-3/5">

		@if ($currentPage == 1)
		<div></div>
		@else
		<button wire:click="$set('currentPage', {{$currentPage-1}})" class="px-16 py-3 bg-blue-500 text-white rounded-md outline outline-offset-2 outline-2 outline-blue-500">ย้อนกลับ</button>
		@endif

		@if ($currentPage == count($pages))
		<button type="submit" class="px-16 py-3 bg-blue-500 text-white rounded-md outline outline-offset-2 outline-2 outline-blue-500">ยืนยัน</button>
		@else
		<button wire:click="$set('currentPage', {{$currentPage+1}})" class="px-16 py-3 bg-blue-500 text-white rounded-md outline outline-offset-2 outline-2 hover:outline-blue-500 outline-gray-200 cursor-pointer transition-all ease-in-out duration-200">ต่อไป</button>
		@endif

	</div>
</div>