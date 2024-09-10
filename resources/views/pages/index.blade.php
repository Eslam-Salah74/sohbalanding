@extends('layouts.app')
@section('content')

<!--^--------------- Form start -->
<div class="container-xxl register-ct px-lg-5 mb-4 bg-transparent" id="register">
    <div class="row container register-sec-ct mx-auto justify-content-between">
        <div class="col-lg-5 col-md-12">
            <h1 class="register-title mt-4">
                سجل الآن
            </h1>
            <h2 class="register-sub">
                سجل بياناتك وانضم الي عملاء صحبة للسياحة المميزون لرحلات الحج والعمرة
            </h2>
            <p class="register-desc mt-3">املأ الاستمارة التالية لنتمكن من مساعدتك في تحقيق رحلتك الايمانية بكل
                سهولة ويسر. اختر ما يناسبك، وسنكون لك خير صحبة للحبيب.</p>
        </div>
        <div class="col-lg-5 col-md-8 position-relative">
            <div class="position-absolute pattern">
                <img src="./assets/img/icons/pattern.png" alt="">
            </div>

            @if (session('error'))
                <script>
                    window.onload = function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: "{{ session('error') }}",
                        });
                    };
                </script>
            @endif
            @if (session('success'))
                <script>
                    window.onload = function() {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: "{{ session('success') }}",
                        });
                    };
                </script>
            @endif

            <form action="https://sohba.ourcrm.app/api/campaign_contacts/1" class="d-flex align-items-center position-relative" method="post">
                @csrf
                <div class="w-100">
                    <div class="radio-container mb-3">
                        <label class="radio-label">
                            رحلات حج
                            <input type="radio" name="trip" class="radio-input" value="1" checked>
                            <span class="custom-radio"></span>
                        </label>
                        <label class="radio-label">
                            رحلات عمرة
                            <input type="radio" name="trip" class="radio-input" value="2">
                            <span class="custom-radio checked"></span>
                        </label>
                    </div>
                    <div class="d-flex flex-column gap-3 phone-input-group">
                        <input type="text" class="input-form-name w-100" name="name" id="" placeholder="الاسم" required>
                        <input type="text" class="input-form phone-1 w-100" name="mobile" id="mobile"
                            placeholder="رقم الهاتف" required>
                        <input type="text" class="input-form phone-1 w-100" name="custom_attributes['mobile2']"
                            placeholder="رقم هاتف آخر" id="mobile2">
                        <input type="hidden" class="input-form phone-1" name="primaryPhoneWithCode">
                        <input type="hidden" name="secondaryPhoneWithCode" id="secondaryPhoneWithCode">
                        <select class="input-form custom-select" name="country_id" id="countrySelect" onchange="getCities(this.value)" required>
                            <option class="option" value="" disabled selected>الدولة</option>
                            @foreach ($coutries as $coutry)
                            <option class="option" value="{{$coutry['id']}}">{{$coutry['name']}}</option>
                            @endforeach
                        </select>
                        <select class="input-form custom-select" name="city_id" id="citySelect" required>
                            <option class="option" value="" disabled selected>المدينة</option>
                        </select>
                        <select class="input-form custom-select" name="custom_attributes['level']" id="levelSelect" required>
                            <option class="option" value="">المستوى</option>
                            <option class="option" value="">المستوى</option>
                            <option class="option" value="">المستوى</option>
                            <option class="option" value="">المستوى</option>
                        </select>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="register">سجل الآن</button>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="activity_id" value="1" id="activity_id">
            </form>
        </div>
    </div>
</div>
<!--^--------------- Form End -->
    <!--?----------about Start -->
    <div class="container-xxl mt-5" id="about-us">
        <div class="container about-ct"><span></span>
            <h1 class="register-title mt-4">
                من نحن
            </h1>
            <p class="about-desc">صحبة للسياحة هى شركة سياحة مصرية رائدة تعمل <span class="desc-span">منذ عام
                    2009</span> وتهدف الى تقديم ارقى انواع
                الخدمات السياحية المتنوعة لتكون بلدنا الحبيبة دائماً أفضل الوجهات السياحة العالمية .</p>
            <p class="about-desc">
                نحن في شركة صحبة للسياحة نؤمن بأن السفر هو تجربة غنية للإستمتاع والتبادل الثقافى والروحى لذا فإننا نطبق
                اعلى معاير جوده الخدمة لعملائنا من خلال التعاون المثمر مع ارقى مقدمى الخدمات السياحية في مختلف المجالات
                السياحية <span class="desc-span">(السياحة الداخلية والخارجية – خدمات النقل الجوى والبري – الحج
                    والعمرة)</span>
            </p>

            <div class="row justify-content-between mt-5 pt-3">
                <div class="col-lg-5">
                    <div class="">
                        <div class="d-flex gap-2 align-items-center pt-3">
                            <div style="height: fit-content;">
                                <img src="./assets/img/icons/vision.png" class="about-icon" alt="">
                            </div>
                            <h3 class="vision">
                                رؤيتنا
                            </h3>
                        </div>
                        <p class="about-desc">
                            أن نكون الشركة الرائدة في تقديم الخدمات السياحية الشاملة والمنتوعة  في مختلف القطاعات
                            السياحية حرصاً منا على استمرار صداره مصر والحفاظ على مكانتها العالمية في هذا القطاع الحيوى
                            والهام .
                        </p>
                    </div>
                    <div class="">
                        <div class="d-flex gap-2 align-items-center pt-3">
                            <div style="height: fit-content;">
                                <img src="./assets/img/icons/target.png" class="about-icon" alt="">
                            </div>
                            <h3 class="vision">
                                هدفنا
                            </h3>
                        </div>
                        <p class="about-desc">
                            تجاوز توقعات عملائنا الذين يسعون لتحقيق تجربة سياحية متميزة ومختلفة داخل الوطن او خارجه
                            لتصبح صحبة للسياحة مثالاً رائداً في صناعة السياحة .
                        </p>
                    </div>
                    <div class="">
                        <div class="d-flex gap-2 align-items-center pt-2">
                            <div style="height: fit-content;">
                                <img src="./assets/img/icons/message.png" class="about-icon" alt="">
                            </div>
                            <h3 class="vision">
                                رسالتنا
                            </h3>
                        </div>
                        <p class="about-desc">
                            نسعى في شركة صحبة للسياحة دائما وبكل قوة الى الاحتفاظ بريادة مصر في هذا المجال و نحرص على
                            المشاركة المجتمعية كما نرتقى بأداء منسوبينا ونهتم بأسرهم وتوفير التطور المهنى والمستدام لهم.
                        </p>
                    </div>

                </div>
                <div class="col-lg-6 d-flex justify-content-end">
                    <img class="about-us" src="./assets/img/cards/about.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!--?----------about End -->
<!-- jQuery and AJAX script -->


<script>
    function getCities(countryId) {
        if (countryId) {
            fetch(`/get-cities/${countryId}`)
                .then(response => response.json())
                .then(data => {
                    const cityDropdown = document.getElementById('citySelect');
                    cityDropdown.innerHTML = '<option value="" disabled selected>أختر المدينة</option>';
                    
                    data.data.forEach(city => {
                        const option = document.createElement('option');
                        option.value = city.id;
                        option.textContent = city.name;
                        cityDropdown.appendChild(option);
                    });
                })
                .catch(error => console.error('Error fetching cities:', error));
        } else {
            document.getElementById('citySelect').innerHTML = '<option value="" disabled selected>لا توجد مدن </option>';
        }
    }
</script>


<script>
    document.querySelectorAll('.radio-input').forEach(radio => {
        radio.addEventListener('change', function() {
            const hiddenInput = document.getElementById('activity_id');
            hiddenInput.value = this.value;
        });
    });
</script>

@endsection
