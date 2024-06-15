<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Baha</title>
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
  border-image-source: url('south.jpg');
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
    <img src="Baha.png" alt="City Landscape">
  </div>

  <div class="section" id="history">
    <h2 lang="en">History</h2>
    <p lang="en">The city of Al-Baha and its region are considered one of the important regions in the Kingdom of Saudi Arabia, and it is located in southwestern Saudi Arabia. Prince Hossam bin Saud bin Abdulaziz Al Saud, (born 1379 AH / 1960 AD), is His Royal Highness, Emir of the Al-Baha region since 1438 AH / 2017 AD, succeeding his brother. Prince Mishari bin Saud, who is the third prince of King Saud’s sons to assume the emirate of Al-Baha region in a row, and the seventh prince. The city of Al-Baha was founded in the sixteenth century AD by the first imam of the Al Saud, Muhammad bin Saud, and at that time it was part of the first emirate of the Al Saud. The history of Al-Baha dates back to the early Islamic eras, and it was known at that time as “Bilad Al-Naqi’” and “Bilad Zubaida.”</p>
    <h2 lang="ar" style="display: none;">التاريخ</h2>

    <p lang="ar" style="display: none;">
      تعتبر مدينة الباحة ومنطقتها واحدة من المناطق الهامة في المملكة العربية السعودية، وتقع في جنوب غرب السعودية الأمير حسام بن سعود بن عبدالعزيز آل سعود، (ولد 1379هـ/1960م)، هو صاحب سمو ملكي، أمير منطقة الباحة منذ عام 1438هـ/2017م، خلفًا لأخيه الأمير مشاري بن سعود، وهو ثالث أمير من أبناء الملك سعود يتولى إمارة منطقة الباحة على التوالي، وسابع أمرائها. تأسست مدينة الباحة في القرن السادس عشر الميلادي على يد الإمام الأول من آل سعود، محمد بن سعود، وكانت وقتها جزءًا من الإمارة الأولى لآل سعود يعود تاريخ الباحة إلى العصور الإسلامية الأولى، وكانت تُعرف آنذاك باسم "بلاد النقيع" و"بلاد زبيدة".
    </p>

  </div>

  <div class="section" id="food">
    <h2 lang="en">Food</h2>
    <p lang="en">Popular foods in the Al-Bahah region: They often rely on wheat and wheat, especially locally produced on residents’ farms, as well as some other types of grains, such as barley, millet, corn, and daqsa. Al-Zahrani mentioned that among the most famous popular dishes in Al-Baha are porridge, rice, and arekeh, as well as daghabis and fattah.</p>
    <h2 lang="ar" style="display: none;">الأكل</h2>
    
    <p lang="ar" style="display: none;">
      الأكلات الشعبية في منطقة الباحة: تعتمد غالباً على القمح والبر، خصوصاً المنتَج محلياً في مزارع السكان، كذلك بعض أنواع الحبوب الأخرى، مثل الشعير والدخن والذرة والدقسة. وذكر الزهراني أن من أشهر الأكلات الشعبية في الباحة هي العصيدة والعيش والعريكة وكذلك الدغابيس والفتة


    </p>

  </div>

  <div class="section" id="dressing">
    <h2 lang="en">Dressing</h2>

    <p lang="en">
    Popular fashions in the region include clothes, head coverings, etc. In the past, some men’s fashions were made of cotton cloth known as dot, and its color is yellowish. It has another name, “mabroom,” because it is woven from twisted cotton threads, and it was common in the region that men wear A dress for work and another dress that he keeps so that he can wear it on occasions, holidays and weddings. The color black predominated in the old traditional women’s fashions in the Al-Baha region. The dress is cut wide and loose, and the woman puts on the belt to control its symmetry on her body. She used to embroidery and decorate her clothes manually around the chest and sides. Before the availability of embroidery machines, the use of a white belt was widespread among women, in order to highlight the color of the black dress. As for the usual belt in daily dress, it was made of colored fabric. It was known in the past for women in the Al-Baha region, a popular garment called the “scarf dress.” And by the shawl, it means something that is preserved until needed. To him, women would only wear this dress on special occasions, weddings, and holidays. It is a dress rich in embroidery and embellishment, and its material is of good quality. The woman covers her head with a shayla, which is a light black cloth, which she wraps several times over her head and under the neck, and puts on a yellow tissue scarf on top. What women were familiar with was the “percale” fabric, which is a durable and shiny black fabric, and the “satin” fabric that is available until the present time.
    </p>

    <h2 lang="ar" style="display: none;">الملابس</h2>

    <p lang="ar" style="display: none;">
      الأزياء الشعبية في المنطقة بين الثياب وأغطية الرأس وغيرها، قديمًا كانت بعض الأزياء الرجالية تُصنع من قماش قطني يُعرف باسم الدوت، ولونه مائل إلى الأصفر، وله اسم آخر هو المبروم، لأنه يُنسج من خيوط قطنية مبرومة، وكان من المتعارف عليه في المنطقة أن الرجل يُخصص ثوبًا للعمل وثوبًا آخر يحفظه حتى يرتديه في المناسبات والأعياد والأفراح ،غلب اللون الأسود على أزياء النساء التقليدية القديمة في منطقة الباحة، ويُفصّل الثوب بشكل واسع وفضفاض، وتضع المرأة الحزام حتى يتحكم في تناسقه على جسدها، وكانت تُطرز وتُزيّن ثيابها يدويًّا حول الصدر والجانبين، وذلك قبل توافر آلات التطريز وشاع استخدام الحزام الأبيض بين النساء، حتى يُبرز لون الثوب الأسود، أما الحزام المعتاد في اللباس اليومي فكان من قماش ملوّن عُرف قديمًا عن المرأة في منطقة الباحة زي شعبي يقال له "الثوب المشال"، ويُقصد بالمشال الشيء المحفوظ إلى حين الحاجة إليه، وكانت النساء لا يلبسن هذا اللباس إلا في المناسبات والأفراح والأعياد، وهو ثوب غني بالتطريز والزينة، وخامته من النوع الجيد وتغطي المرأة رأسها بالشيلة، وهو قماش خفيف أسود، تلفه عدة مرات على رأسها ومن تحت العنق، وتضع من الأعلى منديلًا أصفر من الأقمشة التي عرفتها النساء قماش "البركال"، وهو قماش متين ولمّاع لونه أسود، وقماش "الساتان" المتوافر حتى الوقت الحاضر.
    </p>

  </div>

  <div class="section" id="antiquities">
    <h2 lang="en">ِAntiquities</h2>
    <p lang="en">
     The Al-Baha region is famous for its rich heritage culture, and is considered an oasis for traditional Arab arts and crafts such as weaving, ceramics, and blacksmithing. The Al-Baha region includes antiquities dating back to the Paleolithic and Neolithic eras, which appear in various sites, including: the “” site, Mount Al-Nir, west of Al-Makhwah Governorate, and the Aissaan Mountains, And the ruins of Mashouqa, which are the ruins and remains of twenty villages on the eastern and western highlands of the region. They also contain the archaeological village of “Dhi Ayn” located on top of a mountain made of white stones. Its founding dates back to the sixteenth century AD. It is one of the tourist attractions in the region and has become famous. In the past, with abundant agricultural crops, including bananas, lemons, and raisins, the Al-Baha region includes historic buildings, villages, and popular markets. Agriculture is the main economic activity in the region, and while livestock raising is active in the plain, agricultural activity is prevalent in the highlands that form agricultural terraces and terraces, and its mountains are covered with trees. Juniper, in addition to fruit, grain and fodder farms, is one of the advantages that Al-Baha retains its authentic traditions and customs.
    </p>

    <h2 lang="ar" style="display: none;">الآثار </h2>
    <p lang="ar" style="display: none;">وتشتهر منطقة الباحة بثقافتها التراثية الغنية، وتعتبر واحة للفنون والحرف التقليدية العربية مثل النسيج والخزف والحدادة ،تضم منطقة الباحة آثارًا يعود تاريخها إلى العصر الحجري القديم والحديث، تظهر في مواقع متفرقة، منها: موقع ""، وجبل النير غرب محافظة المخواة، وجبال عيسان، وخرائب معشوقة، وهي أطلال وبقايا لعشرين قرية على المرتفعات الشرقية والغربية من المنطقة، وتحوي كذلك قرية "ذي عين" الأثرية الواقعة على قمة جبل مكون من الحجارة البيضاء، ويعود تاريخ تأسيسها إلى القرن السادس عشر الميلادي، وهي أحد المعالم السياحية في المنطقة، وقد اشتهرت قديمًا بالمحاصيل الزراعية الوفيرة، من بينها الموز والليمون والرياحين ،تضم منطقة الباحة مباني وقرًى وأسواقًا شعبية تاريخية، وتُعدُّ الزراعة النشاط الاقتصادي الرئيس في المنطقة، وبينما تنشط في السهل تربية المواشي، يُعدُّ النشاط الزراعي سائدًا في المرتفعات التي تشكّل مصاطب ومدرجات زراعية، وجبالها مغطاة بأشجار العرعر، إضافة إلى مزارع الفاكهة والحبوب والأعلافومن المميزات تحتفظ الباحة بتقاليدها وعاداتها الأصيلة،
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
