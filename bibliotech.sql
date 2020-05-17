create table librat(
bookID integer auto_increment,
bookName varchar(50),
author varchar(50),
price float,
shtepiaBotuese varchar(50),
numriFaqeve integer,
permbajtja varchar(2000),
fotoPath varchar(100),
rating integer,
stock integer,
primary key(bookID)
);


create table perdoruesit(
userID integer auto_increment,
username varchar(20),
passwordi varchar(50),
antaresimi timestamp default current_timestamp,
email varchar(50),
gjinia char,
qyteti varchar(20),
shteti varchar(20),
ditelindja date,
primary key(userID),
unique(username)
);

create table porosite(
porosiID int8 auto_increment,
userID integer,
dataEPorosise timestamp default current_timestamp,
statusi varchar(10),
adresa varchar(50),
kontakti varchar(20),
primary key(porosiID),
foreign key(userID) references perdoruesit(userID)
);

create table porosiDetails(
porosiID int8,
bookID integer,
sasia integer,
foreign key(porosiID) references porosite(porosiID),
foreign key(bookID) references librat(bookID)
);

create table newsletter(
email varchar(50));

insert into librat(bookName,author,price,shtepiaBotuese,numriFaqeve,permbajtja,fotoPath,rating,stock,Kategoria) values('Becoming','Michelle Obama',15.00,'Crown Publishing Group',448,'Becoming is the memoir of former United States first lady Michelle Obama published in 2018. Described by the author as a deeply personal experience the book talks about her roots and how she found her voice, as well as her time in the White House, her public health campaign, and her role as a mother. The book is published by Crown and will be released in 24 languages. One million copies will be donated to First Book, an American nonprofit organization which provides books to children.It sold more copies than any other book published in the United States in 2018, breaking the record in just 15 days.','C:\Users\HP\Desktop\winter\winter\img\bookImg\Becoming-michelle-obama.jpg',5,30);
insert into librat(bookName,author,price,shtepiaBotuese,numriFaqeve,permbajtja,fotoPath,rating,stock,Kategoria) values('10 Celesat e suksesit','Dr.Ibrahim El Fekijr',13.00,'Sales Masters Press',119,'Një nga çelësat më të rëndësishëm për sukses është pasja e disiplinës për të bërë atë që e di se duhet bërë, qoftë edhe nëse nuk ta ka ëndja edhe aq shumë ta bësh...','C:\Users\HP\Desktop\winter\winter\img\bookImg\10-celesat-e-suksesit.jpg',4,25);
insert into librat(bookName,author,price,shtepiaBotuese,numriFaqeve,permbajtja,fotoPath,rating,stock,Kategoria) values('Aristoteli','Marjorie Grene',10.99,'Botimet Ideart',220,'Portreti i filozofit në këtë libër vjen përmes citimeve autentike, dhjetëra komente të autorëve të ndryshëm klasikë dhe bashkëkohorë, si dhe një bibliografie tejet të pasur, si shpjegim dhe plotësim i opusit të pafundmë të këtij filozofi që ndikoi më shumë se gjithçka tjetër në historinë e qytetërimit perëndimor, që nga Rilindja Evropiane deri në ditët e sotme.','C:\Users\HP\Desktop\winter\winter\img\bookImg\Aristoteli.jpg',4,24);
insert into librat(bookName,author,price,shtepiaBotuese,numriFaqeve,permbajtja,fotoPath,rating,stock,Kategoria) values('48 Hour Start-Up','Fraser Doherty Mbe',19.99,'Harper Thorsons Publishing',224,'Fraser Doherty’s 48-Hour Start-Up is your handy and essential cheat sheet to starting your own business giving the key steps for developing an idea and getting it to market quickly. Almost everyone dreams of starting their own business but very few do. But what if it only had to be a decision of a weekend and it didn’t cost a fortune? In 48-Hour Start-Up, Fraser Doherty uses his experience building a multi-million-dollar company to attempt an experiment; starting with a blank piece of paper, he sets out to start a profitable new business over a weekend, without relying on any technical ability whatsoever. He succeeds and you can, too...','img/bookImg/48 Hour Start-UP.jpg',5,25);
insert into librat(bookName,author,price,shtepiaBotuese,numriFaqeve,permbajtja,fotoPath,rating,stock,Kategoria) values('Asgjë tjetër vecse e vërteta','Giulia Borgiorno',12.50,'Botimet MAX',380,'Duke alternuar çastet e debateve gjyqësore me copëza nga jeta e përditshme me "presidentin" dhe anekdotat mbi "të penduarit profesionistë", autorja rrëfen fillimet e punës së saj si juriste, lidhur paralelisht me njërën prej ngjarjeve më të komplikuara të politikës italiane. Ky libër, si një ditar mjaft interesant i "procesit të shekullit", lexohet si një thriller në fushën ligjore, ku ravijëzohet edhe një portret i panjohur i Andreotit, vështruar nga afër, gjatë provës më të tmerrshme që iu desh të përballonte.','img/bookImg/asgje-tjeter.jpg',4,15);
insert into librat(bookName,author,price,shtepiaBotuese,numriFaqeve,permbajtja,fotoPath,rating,stock,Kategoria) values('Aventurat e Tom Sojerit','Mark Twain',9.99,'Shtepia Botuese Redona',274,'Është një libër për një djalë të ri që rritet anës lumit të Misisipit. Historia është vendosur në një qytet fiksional, i frymëzuar nga qyteti i lindjes së autorit. Tom Sojeri jeton me tezen e tij Poli dhe me gjysmë-vëllain Sid.Shumica e aventurave që do të tregohen në këtë libër kanë ndodhur me të vërtetë. Një pjesë prej tyre i kam jetuar vetë, të tjerat shokë të mi të shkollës. Hak Fini, për shembull, është krejt siç ka qenë në jetë, Tom Sojeri po ashtu, vetëm se për të m’u desh të bashkoj e të thur në një tiparet e tre djemve që kam pas njohur, të sajoj, si të thuash, tipin përmbledhës letrar.','img/bookImg/aventurat.jpg',4,15);
insert into librat(bookName,author,price,shtepiaBotuese,numriFaqeve,permbajtja,fotoPath,rating,stock,Kategoria) values('Harry Potter dhe i burgosuri i Azkabanit','J.K.Rowling',16.99,'Bloomsbury',317,'Harry Potter dhe i burgosuri i Azkabanit paraqet librin e tretë të autores J.K.Rowling në serinë e librave Harry Potter.Aventurat e Harry-t vazhdojnë edhe më tej kësaj here në vitin e tij të tretë të studimeve.Harry do të njoftohet me shokë të rinjë dhe do të njoftohet edhe me kumbarën e tij. Edhe një vit me plot magji dhe aventura që do të zbulojnë shumë për të ardhmen dhe të shkuarën e djaloshit tashmë 13 vjeq...','img\bookImg\harry-potter-dhe-i-burgosuri-i-azkabanit.jpg',4,25);
insert into librat(bookName,author,price,shtepiaBotuese,numriFaqeve,permbajtja,fotoPath,rating,stock,Kategoria) values('Harry Potter dhe Kupa e Zjarrit','J.K.Rowling',22.50,'Bloomsbury',636,'Ky liber paraqet librin e katert te J.K.Rowling në serinë e librave Harry Potter.Duke vazhduar përcjelljen e aventurave te djaloshit tashmë 14 vjeqar. Në vitin e katërt në Hogwarts përveq mësimeve dhe magjive të zakonshme do të mbahet edhe turneu i tre magjistarëve ku do të marrin pjesë edhe dy shkolla të tjera magjie.Në këtë turnament mund të marrin pjesë vetëm nxënësit e vitit të shtate megjithate emri i Harrit gjendet në kupë,mirpo përse...','img\bookImg\Harry-Potter-dhe-kupa-dhe-e-zjarrit.jpg',5,20);
insert into librat(bookName,author,price,shtepiaBotuese,numriFaqeve,permbajtja,fotoPath,rating,stock,Kategoria) values('Harry Potter dhe Urdheri i Feniksit','J.K.Rowling',25.50,'Bloomsbury',766,'Ky liber paraqet librin e pestë te J.K.Rowling në serinë e librave Harry Potter dhe gjithashtu suksesin e saj të radhës në këto seri. Harry Potter dhe Urdhëri i Feniksit e gjen Harryn 15 vjeqar të turbulluar pas ngjarjeve të vitit të kaluar, me vdekjen e Cedric Digoryt dhe kthimin Voldemort.Mirpo Harry gjendet mes dy zjarreve pasi në njërën anë nuk e besojnë njerëzit dhe në anën tjetër Ministria e Magjise.Çfarë do të bëjë Harry për situatën e krijuar...','img\bookImg\harry-potter-and-the-order-of-the-phoenix.jpg',4,15);
insert into librat(bookName,author,price,shtepiaBotuese,numriFaqeve,permbajtja,fotoPath,rating,stock,Kategoria) values('Harry Potter dhe Princi Gjakperzier','J.K.Rowling',19.99,'Bloomsbury',607,'Ky liber paraqet librin e pestë te J.K.Rowling në serinë e librave Harry Potter dhe gjithashtu suksesin e saj të radhës në këto seri. Harry Potter dhe Urdhëri i Feniksit e gjen Harryn 15 vjeqar të turbulluar pas ngjarjeve të vitit të kaluar, me vdekjen e Cedric Digoryt dhe kthimin Voldemort.Mirpo Harry gjendet mes dy zjarreve pasi në njërën anë nuk e besojnë njerëzit dhe në anën tjetër Ministria e Magjise.Çfarë do të bëjë Harry për situatën e krijuar...','img\bookImg\harry-potter-and-the-half-bloodprince.jpg',4,15);
insert into librat(bookName,author,price,shtepiaBotuese,numriFaqeve,permbajtja,fotoPath,rating,stock,Kategoria) values('Historia e feve','Ekrem Sarëkçëogllu',10.50,'Lagos',252,'Përpjekjet për klasifikimin e feve, edhe pse përbëjnë studime shkencore me vlerë, deri më tash nuk kanë mundur të gjejnë një zgjidhje e cila në vete do t’i ngërthejë të gjithe fetë. Disa fe kanë mbetur jashtë, ndërsa disa të tjera nuk i janë përshtatur klasifikimit. Si pasojë, dijetarët nuk kanë gjetur një gjuhë të përbashkët për kalsifikimin e tyre. Krahas kësaj, fetë mund të shpjegohen në bazë të rajoneve gjeografike dhe duke patur parasysh rrjedhën historike të tyre ...','img\bookImg\Historia-e-feve.jpg',3,10);
insert into librat(bookName,author,price,shtepiaBotuese,numriFaqeve,permbajtja,fotoPath,rating,stock,Kategoria) values('Iliada dhe Odisea','Homeri',10.50,'Lagos',344,'“Iliada” dhe “Odiseja” janë vepra klasike të Greqisë së Vjetër të kohës së Platonit dhe Aristotelit. Por, ne nuk dimë asgjë për Homerin. Emrin e tij jo rrallë e kanë shoqëruar me epitetet “i verbër”, “pengu”, “miku”, “njeriu që vinte rregull gjithkund”. Faktet për ekzistencën e tij reale janë të pakta. Se edhe në paska jetuar me të vërtetë një poet i madh i quajtur Homer, a është e vërtetë që poemat madhore i përkasin penës së tij, apo gojës së tij? ','img\bookImg\Iliada dhe Odisea.jpg',5,10);
insert into librat(bookName,author,price,shtepiaBotuese,numriFaqeve,permbajtja,fotoPath,rating,stock,Kategoria) values('Isabela','Muhamed Said',7.99,'Botimet MAX',234,'Isabela është një e krishterë në Spanjën Andaluziane. Pas një bisede që ndëgjon ndërmjet dy muslimanëve i lind dyshimi mbi vërtetësinë e fesë së krishterë. Ajo ia nis dhe lexon mbi Islamin, diskuton me prifterinjët dhe familjarët e saj mbi Biblën dhe vërtetësinë e saj...','img\bookImg\Isabela.jpg',5,10);
insert into librat(bookName,author,price,shtepiaBotuese,numriFaqeve,permbajtja,fotoPath,rating,stock,Kategoria) values('Kështjella','Ismail Kadare',7.99,'Botimet Onufri',304,'Kjo vepër pasqyron rrethimin e një kështjelle shqiptare nga trupat turke në krye me kryekomandantin Tursun Pasha.Romani fillon me vendosjen e trupave osmane përreth kështjellës. Hapësira aty shndërrohet në një kamp me plot tenda, reparte e pajisje të tjera. Ushtria, në fillim bën përpjekje që ti bindë kështjellarët të dorëzoheshin. Mirëpo, meqë kjo përpjekje dështon, në Këshillin e saj të luftës kjo ushtri bën organizimin dhe planet që qëllimi ta arrijë me luftë...','img\bookImg\Kështjella.jpg',5,15);
insert into librat(bookName,author,price,shtepiaBotuese,numriFaqeve,permbajtja,fotoPath,rating,stock,Kategoria) values('Mbreti Lir','William Shakespeare',8.99,'Botimet Onufri',304,'Mbreti Lir eshte mbreti i Anglise. Ai vendos te lere fronin e tij dhe t’a ndaje mes tre vajzave te tij, Gonerilit, Reganit dhe Kordelias. Ai i vendos ato para nje prove ku do te shihte se cila nga vajzat do t’a donte me shume. Dy vajzat e medha nisin ta manipulojne me fjale, ndersa Kordelja, vajza e vogel thote se ajo e do babain e saj ashtu sic do femije. Prandaj ai nuk i jep asaj nga tokat e veta, por e mallkon dhe e debon ate nga shtepia. Nderkohe Kordelja shkon ne France pasi mbreti i Frances ishte ne dashuri me te. Me pas Liri e kupton se c’gabim te rende kishte bere pasi dy vajzat e debojne nga shtepia dhe e lene ne shi...','img\bookImg\King Lear.jpg',4,7);
insert into librat(bookName,author,price,shtepiaBotuese,numriFaqeve,permbajtja,fotoPath,rating,stock,Kategoria) values('Kur qau Niçja','Irvin Yalom',14.99,'Botimet Onufri',415,'Në Vjenën e shekullit XIX, një dramë dashurie, fati dhe vullneti do të luhej në mendjen e bërthamës intelektuale, që përcaktoi epokën. Zhozef Brojeri, themelues i psikanalizës, është në kulmin e karrierës së tij. Fridrih Niçe, filozofi i madh europian, është në prag të vetëvrasjes nga dëshpërimi, i pazoti për të gjetur një kurë për dhimbjen e kokës dhe sëmundje të tjera që e mundojnë...','img\bookImg\kur-qau-nicja.jpg',4,15);

--insertimi i librave kategori te ndryshme 
insert into librat(bookName,author,price,shtepiaBotuese,numriFaqeve,permbajtja,fotoPath,rating,stock,Kategoria) values('Ditari i Ana Frankut','Anne Frank','25.00','Onufri','500','Ditari i Ana Frankut u bë një ndër librat më të lexuar në botë dhe u përkthye në dhjetëra gjuhë. Shtëpia ku ishte fshehur familja Frank në Amsterdam, sot është e hapur për vizitorët. Aty gjendet edhe ditari që shkroi Ana, i cili ka vlerën e një dokumenti unik njerëzor.','img/bookImg/Ditari-i-Ana-Frankut.jpg',5,25);
insert into librat(bookName,author,price,shtepiaBotuese,numriFaqeve,permbajtja,fotoPath,rating,stock,Kategoria) values('Bota e Sofies','Jostein Gaarder','15.00','Onufri','670','Bota e Sofies është një libër i cili në mënyrën më të mirë e përmbledh histrinë e filozofisë nëpër shekuj.Sofia është një vajzë e vogël kureshtare e cila një ditë kur kthehet nga shkolla gjen disa letra nga një autor i panjohur, ky autor më vonë zbulohet se është një filozof i cili dëshiron ti mësojë Sofies historinë dhe mrekullinë e filozofisë.Sofia çdo ditë mëson gjëra të reja mirpo duke u afruar ditëlindja e saj gjërat fillojnë të komplikohen...','img/bookImg/Bota-e-Sofies.jpg',4,15);
insert into librat(bookName,author,price,shtepiaBotuese,numriFaqeve,permbajtja,fotoPath,rating,stock,Kategoria) values('Dyfish i Cliruar','Patricia St.John','30.00','Botuesi AEM-Misioni Ungjillor','168','Ky libër është rreth një njeriu qe quhet Onesimi që është skllav. Vetëm një orë, kur dielli është në kulm dhe gjithë të tjerët flenë, Onesimi është i lirë. Ai takon bijën e një tregtari të pasur. Mes tyre lidhet një miqësi e fortë. Megjithatë ai nuk e kupton se ku qëndron liria e vërtetë. Më në fund, Onesimi shpëton dhe gjen lirinë. Ai krijon miq dhe armiq... ','img/bookImg/dyfish-i-qliruar.jpg',5,25);
insert into librat(bookName,author,price,shtepiaBotuese,numriFaqeve,permbajtja,fotoPath,rating,stock,Kategoria) values('Enver Hoxha','Blendi Fevziu','11.00','Albas','398','“Enver Hoxha”, e para biografi, kontraverse, e shumëdebatuar, e bazuar në dokumentet e arkivit personal të diktatorit dhe në rrëfimet e atyre që e njohën dhe punuar për shumë vite me radhë. E shkruar në një stil gazetaresk, mbetet ndër librat referencial për të njohur botën e ndërlikuar të atij që sundoi për rreth 40 vjet Shqipërinë. ','img/bookImg/enver-hoxha.jpg',5,15);
insert into librat(bookName,author,price,shtepiaBotuese,numriFaqeve,permbajtja,fotoPath,rating,stock,Kategoria) values('Fausti','Johan Gëte','15.00','Dukagjini','350','“Fausti” është kryevepra e Johan Volfgang Gëtes dhe njëherazi njërës prej veprave më të qëndrueshme në historinë e letërsisë botërore. “Fausti” është në një farë kuptimi dhiata e Gëtes, testamenti i gjithë jetës së këtij poeti e mendimtari të shquar, kumton studjuesi dhe përkthyesi Shpëtim Çuçka. “Fausti” në thelb nuk i flet shijes së njeriut, por mendjes së tij. Dhe historia jonë mijëravjeçare njerëzore na mëson se pa mendjen nuk mund të hedhim as edhe një hap të vetëm përpara, as individualisht, as, aq më pak, shoqërisht...','img/bookImg/fausti.jpg',4,15);
insert into librat(bookName,author,price,shtepiaBotuese,numriFaqeve,permbajtja,fotoPath,rating,stock,Kategoria) values('Frosina e Janines','Mira Meksi','4.00','Dukagjini','240','Paul Despiere-i gjeti një letër të tij të shkurtër e pa komente, ku jepej kallëzimi i një murgu të arratisur nga Janina: “Zonjën Frosinë e mbyllën në një sëndyk venecian të larë në argjend dhe pak përpara se të zbardhte e hodhën në ujërat pis të liqenit. Pas saj, diku më larg, shprazën në liqn gjithë mllefin e Ali Pashait, vezirit të Janinës, duke mbytur, lidhur këmbë e duar edhe gjashtëmbëdhjetë gra të tjera që lebetiteshin duke thirur zot e qiell. Ndërsa ajo hyri pa zë në varrin e larë në aegjend... ','img/bookImg/Frosina-e-Janines.jpg',4,15);
insert into librat(bookName,author,price,shtepiaBotuese,numriFaqeve,permbajtja,fotoPath,rating,stock,Kategoria) values('Fuqia e Shprehisë','Charles Duhigg','10.00','Pema','395','Ne thelb, Fuqia e Shprehisë permban nje argument gjallerues: Çelësi për të ushtruar rregullisht, për të humbur peshë, të qenit me produktiv, dhe arritjes se suksesit është të kuptuarit se si funksjonojnë shprehitë. Ashtu si Duhigg tregon, duke perdorur këtë shkencë të re, ne mund ta transformojme biznesin tonë, dhe jeten tone ne diqka perfekte...','img/bookImg/fuqia-e-shprehise.jpg',5,15);
insert into librat(bookName,author,price,shtepiaBotuese,numriFaqeve,permbajtja,fotoPath,rating,stock,Kategoria) values('Gjenerali i ushtrise se vdekur','Ismail Kadare','8.00','Dukagjin','350','Gjenerali i ushtrisë së vdekur është një roman i shkrimtarit Ismail Kadare i botuar së pari më 1963 në Tiranë. Vepra nisi së pari si një tregim të cilin e botoi më 1962 dhe më pas u përpunua dhe u botua si roman vitin pasues po në Tiranë. Vepra u përkthye në gjuhë të tjera dhe i dha autorit njohje ndërkombëtare. U çmua nga e gazeta pariziene Le Monde si një ndër 100 librat e shekullit XX. Vepra frymëzoi dhe u përshtat në zhanre të tjera të artit, si filmi "Kthimi i ushtrisë së vdekur" i Dhimitër Anagnostit dhe përshtatja në filmin dramatik "Il Generale dellarmata morta" të italianit Luciano Tovolit më 1983.Rreth 20 viteve pas luftës së dytë botërore kur Europa jetonte luftën e ftohtë.','img/bookImg/gjenerali-i-ushtrise-se-vdekur.jpg',5,15);
insert into librat(bookName,author,price,shtepiaBotuese,numriFaqeve,permbajtja,fotoPath,rating,stock,Kategoria) values('Harry Potter1','J.K.Rowling','12.00','Dituria','365','Ky liber paraqet librin e pare te J.K.Rowling dhe gjithashtu suksesin me te madh te saj.Historia percjell nje djale i cili ne ditelindjen e tij te 11 meson se eshte djali i dy magjistareve te fuqishem.Ai merr ftesen qe te behet pjese e shkolles se magjise se Hogwarts-it dhe te behet student i kesaj shkolle te famshme.Aty ai meson shume per boten e magjise e cila deri atehere ishte e panjohur per te mirpo meson edhe nje sekret te madh per historine e tij... ','img/bookImg/harry-potter-dhe-guri-filozofal-1.jpg',5,15);
insert into librat(bookName,author,price,shtepiaBotuese,numriFaqeve,permbajtja,fotoPath,rating,stock,Kategoria) values('Harry Potter2','J.K.Rowling','15.00','Dituria','310','Harry Potter dhe Dhoma e të fshehtave është libri i dyte i autores J.K.Rowling në serinë e librave Harry Potter.Libri vazhdon ngjarjen aty ku ishe lënë, me Harry-n tashmë nxënës të Hogwarts-it dhe shokët e tij Ron dhe Hermione.Harry futet ne telashe që nga dita e parë në Hogwarts dhe ngjarje dhe sfida që do përcaktojne fatin e tij e përcjellin prej asaj dite... ','img/bookImg/harry-potter-dhe-dhoma-e-te-fshehtave.jpg',5,15);

insert into librat(bookName,author,price,shtepiaBotuese,numriFaqeve,permbajtja,fotoPath,rating,stock,kategoria) values('Leksione sociologjike','Emile Durkhemi',17,'Albas',187,'Një libër që përmbledh leksionet më të rëndësishme mbi disa prej temave më kyçe që sociologu i madh francez, njëri nga etërit e sociologjisë moderne ka trajtuar në veprat e tij më madhore','img\bookImg\leksione-sociologjike.jpg',3,10,'ShkencaSociale&Psikologji');
insert into librat(bookName,author,price,shtepiaBotuese,numriFaqeve,permbajtja,fotoPath,rating,stock,kategoria) values('Libri i urtesive','Artan Musliu',4,'Sira',272,'Libri i Urtësive është një libër që në vete ngërthen afro njëmijë fjali, këshilla, udhëzime dhe mendime të ndryshme të dijetarëve dhe thirrësve islam. Thëniet janë të mbi 60 dijetarëve dhe thirrësve dhe janë përzgjedhur me një kujdes të veçantë duke u munduar që të jenë të dashura dhe dobiprurësve për të gjithë. Ky libër është i renditur në mënyrë alfabetike sipas emrave të dijetarëve dhe të thirrësve...','img\bookImg\libri-i-urtesive.jpg',4,20,'Religjioz');
insert into librat(bookName,author,price,shtepiaBotuese,numriFaqeve,permbajtja,fotoPath,rating,stock,kategoria) values('Lidhja e Prizrenit','Mehdi Frasheri',15,'Albusi',120,'Të djelë për të djelë çunat e asaj Korçës jetike Shqiptare i merrnin dhe i çonin në Bobushticë edhe u mësonin marrshin e Greqisë. "se gnorizo apo tin kopsi" "tu spathiu tin tromeri" "se gnorizo apo tin opsi" "pu me via metra ti gji". Kur dilte Hoxha në minare, oficeri grek mështillte çunat dhe u thoshte: Këta u kanë vrarë, e u kanë prerë, përgatituni për ti luftuar deri sa të zhduken. Po të vërejmë një hartë etnografike të shtypur nga Ministria e arsimit e Greqisë për shkollat greke, shohim me ngjyrë greke jo vetëm Korçën, Gjirokastrën, e Çamërinë, por edhe Durrësin edhe Elbasanin. Më 1885 një grup idealist frëng- italian edhe anglez, vendosën që të bëjnë propagandë për një konfederatë Ballkanike. Grumbull u nisën e shkuan në Athinë; një grup politikanësh grek të kryesuar nga një politikan i famshëm i quajtur Vurgari. Kur anglezët biseduan për krijimin e shtetit shqiptar kryetari grek me gjak në fytyrë thotë: Çfare është ajo Shqipëri! Shqipëria është e destinuar të jetë me Greqinë.','img\bookImg\Lidhja e Prizrenit.jpg',3,22,'Histori');
insert into librat(bookName,author,price,shtepiaBotuese,numriFaqeve,permbajtja,fotoPath,rating,stock,kategoria) values('Nena e besimtareve','Dr.Ibrahim Duvejsh',7,'Sira',310,'Secilës grua muslimane i kërkohet që t’i realizoje cilësiti e bashkëshortes së mirë duke iu bindur Allahut dhe të Dërguarit të Tij – shteg ky i cili sigurisht që e shpie në Xhenet. Gjithashtu duke i zbatuar këto cilësi martesa e saj do të jetë e mbushur plot me lumturi e gëzime. Këshilla më e mirë ndaj secilës muslimane është që t’i shmangen rrugës së grave jomuslimane. Por në vend të kësaj ta ndërtojnë familjen sipas fesë ndërsa jomuslimanët e ndertojne atë sipas dëshirës. Ato i shperfillin dallimet themelore ndermjet burrave dhe grave dhe i trajtojne ata (burrat) si të barabarte me to në secilin aspekt – e cila ka rezultuar në prishjen e familjeve dhe shkëputjen e lidhjeve ...','img\bookImg\nena-e-besimtareve.jpg',5,15,'Religjioz');
insert into librat(bookName,author,price,shtepiaBotuese,numriFaqeve,permbajtja,fotoPath,rating,stock,kategoria) values('Nena e dashurise','Don Lush Gjergji',15,'Dukagjini',253,'Nënë Tereza flet në shumë gjuhë të botës dhe dr. dom Lush Gjergji ka skalitur me portretin e Nënës së shekullit XX me emrin: Nënë Tereza  këtë përfaqësuese të dashur të shumë konfesioneve (besimeve) të kombeve e të racave të ndryshme.','img\bookImg\nena-e-dashurise.jpg',4,35,'Biografi');
insert into librat(bookName,author,price,shtepiaBotuese,numriFaqeve,permbajtja,fotoPath,rating,stock,kategoria) values('Paradoleshenca','Xhevair Lleshi',14,'Uegen',200,'Paraadoleshenca është një libër psikologjik që i kushtohet moshës 12 - 15vjeç, situatave që krijohen, dukurive të shumta psikologjike, shoqëruar me shembuj të shumtë, analiza të ndryshme, vlerësime, shqyrtime praktike dhe formulime teorike të rëndësishme për këtë moshë dhe për mësuesit, prindërit, lexuesit e zakonshëm, por edhe studentët që përgatiten për mësuesí. Libri krijon mundësi njohëse të mira, ndjek një linjë interesante dhe modele të njohura psikologjike, të cilat i vijnë në ndihmë mësuesit për vlerësime edukative të sakta dhe për organizimin sa më të mirë të mësimit dhe të veprimtarive edukative','img\bookImg\paraadoleshenca.jpg',4,12,'ShkencaSociale&Psikologji');

insert into librat(bookName,author,price,shtepiaBotuese,numriFaqeve,permbajtja,fotoPath,rating,stock,kategoria) values('Peshperime gruaje','Klara Buda',12,'UET Press&MAPO Editions',398,'Romani Pëshpërimë Gruaje është një fiksion që i vendos ngjarrjet në vitet 80- të në regjimin totalitar shqiptar dhe trajton rrugën e individëve nga një kolektivitet mbytës drejt lirisë. Megjithe terrorin e friken ideali i lirisë, ka mbijetuar githmone edhe në diktaturat më të ashpra.','img\bookImg\peshperime-gruaje.jpg',2,10,'Biografi');
insert into librat(bookName,author,price,shtepiaBotuese,numriFaqeve,permbajtja,fotoPath,rating,stock,kategoria) values('Petku i meshires','Emine Shenikolglu',7,'Sira',440,'Secilës grua muslimane i kërkohet që t’i realizoje cilësiti e bashkëshortes së mirë duke iu bindur Allahut dhe të Dërguarit të Tij – shteg ky i cili sigurisht që e shpie në Xhenet. Gjithashtu, duke i zbatuar këto cilësi, martesa e saj do të jetë e mbushur plot me lumturi e gëzime. Këshilla më e mirë ndaj secilës muslimane është që t’i shmangen rrugës së grave jomuslimane. Por në vend të kësaj, ta ndërtojnë familjen sipas fesë, ndërsa jomuslimanët e ndertojne atë sipas dëshirës. Ato i shperfillin dallimet themelore ndermjet burrave dhe grave dhe i trajtojne ata (burrat) si të barabarte me to në secilin aspekt – e cila ka rezultuar në prishjen e familjeve dhe shkëputjen e lidhjeve ...','img\bookImg\Petku-i-deshires-dhe-dashurise.jpg',5,5,'Religjioz');
insert into librat(bookName,author,price,shtepiaBotuese,numriFaqeve,permbajtja,fotoPath,rating,stock,kategoria) values('Princesha Argjiro','Ismail Kadare',4,'Onufri',120,'Princesha Argjiro është sundimtarja e qytetit të Gjirokastrës gjatë shekullit XIV, pas vdekjes së burrit. Princesha Argjiro lufton me turqit kur ata e rrethojnë kalanë e Gjirokastrës, mirëpo njeri truproje e tradhëton ndaj ata futen në kala. Për të mos rënë e gjallë në duart e turqve, u hodh nga kulla më e lartë e kalasë bashke me djalin e saj foshnje dhe u copëtua mbi një shkëmb. Mirëpo foshnja sipas legjendës mbeti gjallë.','img\bookImg\Princesha Argjiro.jpg',4,10,'Libra per femije');
insert into librat(bookName,author,price,shtepiaBotuese,numriFaqeve,permbajtja,fotoPath,rating,stock,kategoria) values('Princi dhe i varfri','Mark Tuein',4,'Uegen',188,'“Princi dhe i varfri” është përpjekja e parë e Mark Tuein për të lëvruar fiksionin historik. E vendosur në vitin 1547, kjo është historia e dy djemve të rinj, të cilët janë identikë në paraqitje: Tom Kanti – një varfanjak i cili jeton me babain e tij abuziv, dhe Princi Eduard, djali i mbretit Henri VIII.','img\bookImg\princidheivarferi.jpg',3,12,'Libra per femije');
insert into librat(bookName,author,price,shtepiaBotuese,numriFaqeve,permbajtja,fotoPath,rating,stock,kategoria) values('Psikologjia e femijes','Ross Vasta',10,'Uegen',603,'Libri i madh Psikologjia e fëmijës e autorëve amerikanë Vasta, Haith dhe Miller është tashmë në duart e lexuesit shqiptar. Është një botim që e kapërcen hamendjen e thjeshtë të botimit, i vështirë në të gjitha drejtimet, që nga e drejta e botimit (me një pagesë tepër të lartë) e deri te përkthimi, konsulenca e vijueshme psikologjike, redaktimi po në praninë e këtij këshillimi të pandashëm dhe pastaj shtypi, duke qenjë një libër me format të madh dhe me një numër të shumtë faqesh. Nuk është se ka ndodhur çudia, por një punë e domosdoshme që meriton vëmendje.','img\bookImg\psikologjia-e-femijes.jpg',5,13,'ShkencaSociale&Psikologji');
insert into librat(bookName,author,price,shtepiaBotuese,numriFaqeve,permbajtja,fotoPath,rating,stock,kategoria) values('Republika','Platoni',21,'Dukagjini',330,'Platoni eshte filozofi me ndikimin më të madh në qytetërimin boteror dhe sidomos atë europian. I lindur ne Athine, (427- 347 p.e.s.), ai ishte nje student i Sokratit, filozofit më të madh të të gjitha koherave, dhe më pas ai u bë mësues i filozofit tjeter te madh grek, Aristotelit. Republika" si dhe "Dialoget" janë mbështetur në fillim në mësimet e Sokratit dhe më pas Platoni përshkruan idetë dhe qëndrimet e veta për Shtetin, të drejtën, virtytet e njeriut dhe për qeverisjen. Qëllimi i Platonit ështe që të krijojë shoqërinë e drejtë, një mënyrë të drejtë dhe me virtyte të të jetuarit të përbashkët, një shoqeri të udhëhequr nga mbreter filozofë, me virtyte dhe të drejte. Sot, që duket sikur informacioni është bërë "masa" e kulturës dhe e dijeve, nevoja për mesimet e Platonit është më e madhe se kurrë. Informacioni nuk e mënjanon dhe as e mohon apo e bën të panevojshëm atë që është kryesorja në çdo shoqëri, qëndrimin ndaj gjërave, jetës, veprimeve tona, shoqerisë, të drejtës dhe virtyteve.','img\bookImg\Republika.jpg',5,55,'Histori');
insert into librat(bookName,author,price,shtepiaBotuese,numriFaqeve,permbajtja,fotoPath,rating,stock,kategoria) values('Shitesi i kepuceve','Phil Knight',16,'Minerva',494,'Një sagë e mrekullueshme e inovacionit, mbijetesës, dhe triumfit e themeluesit të kompanisë Nike. Udhëtim i një heroi të jashtëzakonshëm, një rrëfim epik për besimin, vendosmërinë e pashembullt, ekselencën, dështimin, triumfin, mençurinë e fituar me mund dhe dashurinë...','img\bookImg\Shitesi i kepucave.jpg',5,43,'Ekonomi&Biznes');

insert into librat(bookName,author,price,shtepiaBotuese,numriFaqeve,permbajtja,fotoPath,rating,stock,kategoria) values('Skenderbeu','Sabri Godo',15,'Albusi',320,'Roman historik, ndryshe nga të tjerët, i shkruar nga i mirënjohuri Sabri Godo, që tregon historinë e heroit tonë kombëtar. Romani përshkruan trimëritë e luftës 25-vjeçare kundër turqve, por edhe ndjenjat e tij, çfarë mendon ai, mënyrën e komunikimit me të afërmit, ushtarët, trimat shqiptarë, dashurinë për Shqipërinë. Një roman që këtë figurë kaq të lartë kombëtare e afron më shumë me ne, e bën më njerëzore dhe më të afërt.','img\bookImg\Skenderbeu.jpg',5,15,'Histori');
insert into librat(bookName,author,price,shtepiaBotuese,numriFaqeve,permbajtja,fotoPath,rating,stock,kategoria) values('Te jashtezakonshmit','Malcolm Gladwell',8,'Botime Pegi',258,'“Sekretet e suksesit” shpjegon se ç’të përbashkëta kanë Beatles-at me Bill Gates-in, suksesin e jashtëzakonshëm të aziatikëve në matematikë, përparësitë e fshehura të yjeve të atletikës, përse avokatët më të mirë të Nju-Jorkut kanë të gjithë të njëjtin kurrikulum, etj. Gladwell, gjithashtu, argumenton se ka rëndësi viti i lindjes nëse doni të bëheni një milioner i Silicon Valley ose vendi i lindjes nëse doni të jeni një pilot i suksesshëm ...','img/bookImg/Te jashtzakonishmit.jpg',5,34,'Ekonomi&Biznes');
insert into librat(bookName,author,price,shtepiaBotuese,numriFaqeve,permbajtja,fotoPath,rating,stock,kategoria) values('The Communist Manifesto','Karl Max',30,'Dukagjini',430,'Manifestimi komunist përmbledh teorinë e Marksit dhe të Engelsit në lidhje me natyrën e shoqërisë dhe politikës, që me fjalët e tyre, "Historia e të gjithë shoqërisë deri tani ekzistuese është historia e luftës së klasave." Ajo gjithashtu paraqet shkurtimisht idetë e tyre për mënyrën se si shoqëria kapitaliste e kohës përfundimisht do të zëvendësohet nga socializmi. Pranë fundit të Manifestit, autorët kërkojnë "përmbysjen e detyrueshme të të gjitha kushteve ekzistuese sociale," që shërbeu si justifikim për të gjitha revolucionet komuniste në mbarë botën.','img\bookImg\The Communist Manifesto.jpg',5,14,'Histori');
insert into librat(bookName,author,price,shtepiaBotuese,numriFaqeve,permbajtja,fotoPath,rating,stock,kategoria) values('The tragedy of Macbeth','William Shakespeare',25,'The Global Shakespeare Series',234,'Makbethi eshët njëra ndër tragjeditë e Shekspirit ku paraqitet lufta e përgjakshme për pushtet ne Skoci gjatë shekullit XI. Makbethi është një gjeneral ne ushtrinë e mbretit, dhe një dite krejt papritur ai ndeshtë me një magjistare. Magjistarja parashikon fatin e tij dhe i tregon se një dite ai do te behej mbret por se nuk e dinte se ku. Pas këtij parashikimi ai nuk resht se menduari se një dite do te behej mbret, këtë gjë ai ia tregon dhe te shoqes e cila tepër ambicioze dhe gjakftohte e bind Makbethin qe te vrase mbretin e Skocisë. Ne fillim te veprës kemi një gjakftohtësi nga te dyja palët por Makbethi kishte vrare disa ne fushën e betejës por ata kane qene armiq ai nuk ka vrare kure ne përfitim te tij por vetëm ne shërbim te mbretit.','book\bookImg\Macbeth.jpg',5,23,'Filiozofi&Sociologji');
insert into librat(bookName,author,price,shtepiaBotuese,numriFaqeve,permbajtja,fotoPath,rating,stock,kategoria) values('Trendafili i krishtere','Emine Shenikolgu',7,'Sira',430,'Ne jemi të detyruar të jetojmë pa pritur respekt prej të tjerëve, aq sa shfaqim respekt kundrejtë tyre. Meqë i gjithë njerëzimi është i afërt në zanafillë, atëherë të gjithë janë të detyruar t’I lënë të tjerët të lire në besimin e tyre...','img\bookImg\Trendafili i krishtere.jpg',4,16,'Religjioz');
insert into librat(bookName,author,price,shtepiaBotuese,numriFaqeve,permbajtja,fotoPath,rating,stock,kategoria) values('Zero te nje','Peter Thiel',20,'Botime Pema',220,'Ky libër është se si të arrijmë atje. "Kur një rrezikues shkruan një Iibër, lexoje. Në rastin e Peter Thiel, lexoje dy herë. Ose, për të qenë i sigurt, tri herë. Eshtë klasik.Ky libër paraqet ide tërësisht të reja dhe përtëritëse në krijimin e vlerës në botë.Peter Thiel ka ndërtuar kompani të shumta depërtuese ...','img\bookImg\zero-te-nje.jpg',5,21,'Ekonomi&Biznes');
insert into librat(bookName,author,price,shtepiaBotuese,numriFaqeve,permbajtja,fotoPath,rating,stock,kategoria) values('Zonja e zeze','Fahri Balliu',7,'Dukagjini',270,'Saga e keqe e komunizmit jep motërzimin e saj edhe në rapotet burrë-grua, kur është fjala për një çift tiranësh. Shembujt e saj janë aq mbresëlënës, saqë çifti tepër i përfolur Makbeth-Ledi Makbeth, përpara tyre, ngjan disi i zbehtë. Po të shihni pasqyrimin e çiftit të famshëm shekspirian në versionet rus, rumun dhe shqiptar, do të vëmë re një skenë disi të habitshme: sa më i zi të ketë qënë personazhi, aq më të lehtë e ka pasur dënimin.','img\bookImg\zonja-e-zese.jpg',2,23,'Biografi');

select * from librat where Kategoria='Biografi';
select * from librat;

alter table librat
add column Kategoria varchar(20);

update librat set Kategoria='Biografi' where bookID=1;
update librat set Kategoria='Ekonomi&Biznes' where bookID=2;
update librat set Kategoria='Filozofi&Sociologji' where bookID=3;
update librat set Kategoria='Ekonomi&Biznes' where bookID=4;
update librat set Kategoria='Biografi' where bookID=5;
update librat set Kategoria='Libra per femije' where bookID=6;
update librat set Kategoria='Fantazi' where bookID=7;
update librat set Kategoria='Fantazi' where bookID=8;
update librat set Kategoria='Fantazi' where bookID=9;
update librat set Kategoria='Fantazi' where bookID=10;
update librat set Kategoria='Religjioz' where bookID=11;
update librat set Kategoria='Histori' where bookID=12;
update librat set Kategoria='Roman' where bookID=13;
update librat set Kategoria='Letersi Shqiptare' where bookID=14;
update librat set Kategoria='Roman' where bookID=15;
update librat set Kategoria='Filozofi&Sociologji' where bookID=16;
update librat set Kategoria='Histori' where bookID=17;
update librat set Kategoria='Filozofi&Sociologji' where bookID=18;
update librat set Kategoria='Religjioz' where bookID=19;
update librat set Kategoria='Biografi' where bookID=20;
update librat set Kategoria='Roman' where bookID=21;
update librat set Kategoria='Letersi Shqiptare' where bookID=22;
update librat set Kategoria='Ekonomi&Biznes' where bookID=23;
update librat set Kategoria='Letersi Shqiptare' where bookID=24;
update librat set Kategoria='Fantazi' where bookID=25;
update librat set Kategoria='Fantazi' where bookID=26;

create table kategorite(
	kategoriID integer auto_increment,
  kategoriName varchar(50),
  Statusi integer,  
	primary key(kategoriID)
);

insert into kategorite(kategoriName,Statusi) values('Fantazi',1);
insert into kategorite(kategoriName,Statusi) values('Biografi',1);
insert into kategorite(kategoriName,Statusi) values('Histori',1);
insert into kategorite(kategoriName,Statusi) values('Roman',1);
insert into kategorite(kategoriName,Statusi) values('EkonomiBiznes',1);
insert into kategorite(kategoriName,Statusi) values('FilozofiSociologji',1);
insert into kategorite(kategoriName,Statusi) values('Libra per femije',1);
insert into kategorite(kategoriName,Statusi) values('Religjioz',1);

alter table newsletter  add emri varchar(50) ;
alter table newsletter add subjekti varchar(50);
alter table newsletter add mesazhi varchar(50) ;
