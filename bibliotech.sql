create table librat(
bookID integer auto_increment,
bookName varchar(50),
author varchar(50),
price float,
shtepiaBotuese varchar(50),
numriFaqeve integer,
permbajtja varchar(1000),
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