<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Riyadh</title>
<style>
  body {
    font-family: 'Arial', sans-serif;
    background-color: #d4ae46;
    color: #5a4e4d;
    line-height: 1.6;
  }
  .main {
 /* Define transparent borders for all sides except the right to maintain the box model */
  border-top: 0 solid transparent;
  border-right: 75px solid transparent; /* Adjust the width as needed */
  border-bottom: 0 solid transparent;
  border-left: 0 solid transparent;

  /* Apply the border image only to the right side */
  border-image-source: url('center.jpg');
  border-image-slice: 30; /* Adjust the slice value as needed */
  border-image-width: 75px; /* The width of the border image */
  border-image-outset: 0;
  border-image-repeat: none;
}

  .container {
    max-width: 1200px;
    margin: auto;
    padding: 0 20px;
    overflow: hidden;
  }
  .header {
    background: #5c3a03;
    color: #fff;
    padding: 20px 0;
    text-align: center;
  }
  .language-switcher {
    position: fixed;
    top: 10px;
    right: 10px;
    z-index: 1000;
  }
  .language-switcher button {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    background-color: #f7ecd;
    color: #5a4e4d;
  }
  .section {
    background: #fff;
    margin: 20px 0;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
  }
  .section h2 {
    border-bottom: 2px solid #c9a87c;
    padding-bottom: 10px;
    margin-bottom: 20px;
    color: #8a7f7c;
  }
  .city-photo img {
    width: 100%;
    height: auto;
    padding: 15px;
    margin: 10px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
  }
  select {
    padding: 10px;
    margin-bottom: 20px;
    width: 100%;
    font-size: 16px;
    border-radius: 5px;
  }
  /* Add styles for Arabic content */
  [lang="ar"] {
    font-family: 'Arial', sans-serif;
    display: none;
  }
  /* Style adjustments for RTL layout */
  body[dir="rtl"] {
    text-align: right;
  }
  body[dir="rtl"] .section h2 {
    text-align: right;
  }
  body[dir="rtl"] .language-switcher {
    left: 10px;
    right: auto;
  }
 .dropdown {
    position: relative;
    display: inline-block;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }

  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }

  .dropdown-content a:hover {background-color: #f1f1f1}

  .menu-icon {
    cursor: pointer;
    width: 30px;
    height: 30px;
    background-image: url('menu.png');
    background-size: cover;
    background-repeat: no-repeat;
  }


.container select {
  padding: 10px 45px 10px 20px; /* Adjust padding to make space for the icon */
  border: 2px solid #c9a87c; /* Historical accent color */
  border-radius: 5px;
  appearance: none; /* Remove default arrow */
  -webkit-appearance: none;
  -moz-appearance: none;
  background-color: #f8f8f8;
  cursor: pointer;
  font-size: 16px;
  width: 100%; /* Ensure dropdown fills container */
  box-shadow: 0 2px 5px rgba(0,0,0,0.2); /* Soft shadow for depth */
}



/* Adjustments for hover effect */
.container select:hover {
  border-color: #a67c52; /* Darker shade for interaction */
}

/* Adjustments when the dropdown is focused */
.container select:focus {
  outline: none;
  border-color: #a67c52; /* Consistent with hover state */
}

</style>
</head>
<body class="main">

<div class="language-switcher">
  <button onclick="switchLanguage('en')">English</button>
  <button onclick="switchLanguage('ar')">العربية</button>
</div>

<div class="container">
  <div class="dropdown">
    <div class="menu-icon" onclick="toggleDropdown()"></div>
    <div id="dropdown-content" class="dropdown-content">
      <a href="#history" onclick="showSection('history')">History<br></a>
      <a href="#food" onclick="showSection('food')">Food</a><br>
      <a href="#dressing" onclick="showSection('dressing')">Dressing</a><br>
      <a href="#archaeology" onclick="showSection('antiquities')">Antiquities</a>
    </div>
  </div>
</div>

<div class="container">
  <div class="city-photo">
    <img src="Riyadh.png" alt="City Landscape">
  </div>

  <div class="section" id="history">
    <h2 lang="en">History</h2>
    <p lang="en">Riyadh witnessed many important events that separated the history of two countries. They are the second Saudi state and the Kingdom of Saudi Arabia, and the founding king, Abdulaziz bin Abdulrahman Al Saud, entered it in the year 1319 AH/1902 AD, declaring the establishment of the Kingdom of Saudi Arabia, and from there he set out to reunify most of the regions of the Arabian Peninsula, and the Qasr al-Hukm area is currently in the heart of Riyadh A living witness to most These events are an urban and cultural landmark in the landmarks of Riyadh, past and present, and a national and cultural element.
Riyadh has the largest percentage of national heritage monuments in the history of the Kingdom, the most prominent of which is the Al-Murabba area, which includes the Al-Murabba Palace, which was established by King Abdulaziz. It was the palace, as it was the first building to be established outside the walls of Riyadh, the first step in the urban expansion of ancient Riyadh. King Abdulaziz bin Abdul Rahman bin Faisal bin Turki bin Abdullah bin Muhammad bin Saud (1293 AH 1877/AD - 1373 AH 1953/AD), is the founder and unifier of the Kingdom of Saudi Arabia, and its first king. He was called the Sultan, Ibn Saud, and Mu’azi, and he is nicknamed Abu Turki, and he is the son of the last imams. The Second Saudi State: Imam Abdul Rahman bin Faisal, the fourteenth ruler of the Al Saud family, assumed power in the Kingdom of Saudi Arabia when he was in his twenties, and spent 54 years in power, making him the longest-serving ruler in the history of the Saudi state.</p>
    <h2 lang="ar" style="display: none;">التاريخ</h2>

    <p lang="ar" style="display: none;">
      عایشت الریاض كثیًرا من الأحداث المھمة الفاصلة في تاریخ دولتین؛ ھما الدولة السعودیة الثانیة والمملكة العربیة السعودیة، ودخلھا الملك المؤسس عبدالعزیز بن عبدالرحمن آل سعود عام 1319ھـ1902/م، معلناً بذلك قیام المملكة العربیة السعودیة، ومنھا انطلق لإعادة توحیدمعظم مناطق شبھ الجزیرة العربیة، و تعد منطقة قصر الحكم في قلب الریاض حالیًّا شاهداً حياً على معظم تلك الأحداث، ً ومعلما عمرانیًّا و ثقافياً, في معالم الریاض قد ًیما وحدیث ًا، وعنصرا وطنیّ وثقافیّ
وتحوز الریاض النسبة الأكبر من المعالم التراثیة الوطنیة في تاریخالمملكة، ومن أبرزھا منطقة المربع التي تضم قصر المربع، الذي أنشأه الملك عبدالعزیز، وكان القصرًا، فھو أول بناء یُنشأ خارج أسوار الریاض الخطوة الأولى لتوسع الریاض عمرانیّ القدیمة. الملك عبدالعزیز بن عبدالرحمن بن فیصل بن تركي بن عبدالله بن محمد بن سعود (1293ھـ1877/م - 1373ھـ1953/م)، ھو مؤسس المملكة العربیة السعودیة وموحدھا، وأول ملوكھا، لقب بالسلطان، وابن سعود، ومعزّي، ویُكنى بأبي تركي، وھو ابن آخر أئمة الدولة السعودیة الثانیةالإمام عبدالرحمن بن فیصل، والحاكم الرابع عشر من أسرة آل سعود، تولى الحكم في المملكة العربیة السعودیة وھو في العشرینات من عمره، وأمضى في الحكم 54 عاماً، جعلتھ صاحب أطول فترة حكم في تاریخ الدولة السعودیة.

    </p>

  </div>

  <div class="section" id="food">
    <h2 lang="en">Food</h2>
    <p lang="en">Al-Qursan - Al-Jarish - Al-Mataziz - Marqooq - Al-Hunaini Al-Najdi</p>
    <h2 lang="ar" style="display: none;">الأكل</h2>
    
    <p lang="ar" style="display: none;">
      القرصان-الجريش -المطازيز-مرقوق -الحنيني النجدي 
    </p>

  </div>

  <div class="section" id="dressing">
    <h2 lang="en">Dressing</h2>

    <p lang="en">
    It was known about the men of the central region that they wore a cotton shirt made of blue and brown karbas, and under the shirt they wore cotton pants, and the upper part on the chest was called (the pada).
It is worn over the top (al-marwadun) and differs in its wide, triangular-shaped sleeves, the tip of which hangs downward until it almost reaches ground level. The garment generally consists of details of the body, trousers, and turbans.
<br>The Shatfa Iqal: which was made of fine black rows and decorated with zari threads and took the geometric shape of a pentagon.
<br>The reeded aqal: It is similar to the shatfa aqal, except that it has a smaller knot and the bands between its knots are longer and have more reeds. It is made manually from black wool and reed threads.
<br>The black aqal: It is handmade from black wool and lined with white cotton, taking a circular shape.
<br>To secure the ghutra, it is worn on the head (cap)
<br>And among the things that are worn to give an aesthetic appearance, such as Al-Sayaa, Daghla, and Zubun.
  <br>
There are clothes designated for women when they leave the house. A woman covers her face with a shaila (ghadfa) made of light tulle
Some women wear the burqa, which covers the entire face except for the eyes.
    </p>

    <h2 lang="ar" style="display: none;">الملابس</h2>

    <p lang="ar" style="display: none;">
      عرف عن رجال المنطقة الوسطى أنهم كانوا يرتدون قميص قطني من الكرباس الأزرق والبني ويرتدي تحت القميص سروالاً قطنياً والجزء العلوي على الصدر تسمى (اللبادة) 
ويرتدي من فوق (المرودن) ويختلف في اكمامها الواسعة مثلثة الشكل التي يتدلى طرفها نحو الاسفل حتى يكاد يصل إلى مستوى الأرض، يتكون الثوب بشكل عام في تفصيلية من البدن والبنائق والتخراصة.
<br>عقال الشطفة: الذي كان يصنع من الصفوف الناعم الاسود ويزين بخيوط الزري ويتخذ الشكل الهندسي خماسي الأضلاع 
<br>العقال المقصب: هو مشابه العقال الشطفة إلا أنها عقده اصغر و العصائب التي بين عقدها أطول وقصابها اكثر ويصنع يدوياً من الصوف الاسود وخيوط القصب.
<br>العقال الاسود: يصنع يدوياً من الصوف المرعز الاسود ويبطن بالقطن الأبيض متخذا الشكل الدائري.
<br>ولتثبيت الغترة على تلبس على الرأس (طاقية)
<br>ومن الأشياء التي ترتدي لإعطاء شكل جمالي كالصاية والدقلة والزبون.
 <br>
وھناك ألبسة خصصت للنساء لدى خروجھن من المنزل. المرأة تغطي وجھھا بالشیلة (الغدفھ) المصنوعة من التل الخفیف
وترتدي بعض النساء (البرقع) وهو غطاء للوجه كاملاً بإستثناء العينين.

    </p>

  </div>

  <div class="section" id="antiquities">
    <h2 lang="en">ِAntiquities</h2>
    <p lang="en">
     Among the most prominent historical landmarks that represent great tourist value for the city of Riyadh are: Al-Masmak Palace and Al-Hukm Palace, which together represent one of the most prominent tourist areas that showcase the history of the Kingdom and the city of Riyadh in particular.
    </p>

    <h2 lang="ar" style="display: none;">الآثار </h2>
    <p lang="ar" style="display: none;">
    ومن أبرز المعالم التاریخیة التي تمثل قيمة سياحية كبيرة لمدينة الرياض: قصر المصمك وقصر الحكم ويمثلان معاً احد ابرز المناطق السياحية التي تعرض تاريخ المملكة و مدينة الرياض بشكل خاص
    </p>
  
  </div>

</div>
<script>
  function switchLanguage(lang) {
  // Set the direction and language of the document body
  document.body.dir = lang === 'ar' ? 'rtl' : 'ltr';
  document.body.lang = lang;

  // Select all elements with 'lang="ar"' and toggle their display
  var arabicElements = document.querySelectorAll('[lang="ar"]');
  for (var i = 0; i < arabicElements.length; i++) {
    arabicElements[i].style.display = lang === 'ar' ? 'block' : 'none';
  }

  // Select all elements with 'lang="en"' and toggle their display
  var englishElements = document.querySelectorAll('[lang="en"]');
  for (var i = 0; i < englishElements.length; i++) {
    englishElements[i].style.display = lang === 'en' ? 'block' : 'none';
  }
}

    function showSection(section) {
    var sections = document.querySelectorAll('.section, .city-photo');
    sections.forEach(function(sec) {
      sec.style.display = 'none'; // Hide all sections initially
    });
    if (section === 'all') {
      sections.forEach(function(sec) {
        sec.style.display = 'block'; // Show all sections
      });
    } else {
      document.getElementById(section).style.display = 'block'; // Show the selected section
    }
  }
  function toggleDropdown() {
  var dropdown = document.getElementById('dropdown-content');
  dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
}

function showSection(sectionId) {
  // Hide all sections
  var sections = document.getElementsByClassName('section');
  for (var i = 0; i < sections.length; i++) {
    sections[i].style.display = 'none';
  }
  // Show the selected section
  document.getElementById(sectionId).style.display = 'block';
}
</script>

</body>
</html>
