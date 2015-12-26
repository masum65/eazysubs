<?php
/**
*
* help_faq [Bulgarian]
*
* @package language
* @version $Id: help_faq.php 8896 2008-09-19 16:59:40Z nacholibre $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$help = array(
	array(
		0 => '--',
		1 => 'Въпроси за Входа и Регистрацията'
	),
	array(
		0 => 'Защо не мога да вляза?',
		1 => 'А регистрирахте ли се? Сериозно, трябва да се регистрирате, за да влезете. Да не би да сте били изгонени от форумите (ще видите съобщение, ако това е така)? В този случай би трябвало да се свържете с администраторите и да разберете какви са причините. Ако сте се регистрирали, не сте изгонени и все пак не можете да влезете, проверете дали въвеждате правилно името и паролата си. Обикновено това е проблема; ако във вашия случай не е, свържете се с администраторите за повече информация.'
	),
	array(
		0 => 'Защо въобще трябва да се регистрирам?',
		1 => 'Може и да не се наложи. От администраторите на форумите зависи дали е необходимо да се регистрирате, за да пускате мнения. При всички положения, обаче, регистрацията ще ви даде достъп до специални функции, недостъпни за гостите. Някои от тези функции са личен аватар, лични съобщения, пращане на мейл през форума, участие в потребителски групи и други. Регистрацията отнема само няколко минути и е препоръчително да се регистрирате.'
	),
	array(
		0 => 'Защо излизам автоматично?',
		1 => 'Форумът пази вашия статус <i>Влязъл</i> само за кратко, след като активността ви престане (напр. затворите страницата с форумите). Това се прави, за да е сигурно, че никой няма да влиза от ваше име. Ако изберете опцията <i>Искам да влизам автоматично с всяко посещение</i> когато влизате, форумът ще запази статуса ви за винаги (или докато не натиснете Изход). Този подход, обаче, не се препоръчва в никакъв случай ако ползвате интернет от клуб, кафе, библиотека и прочие публични места, тъй като е възможно други хора да влязат на форума с вашия потребител.'
	),
	array(
		0 => 'Не искам името ми да се вижда в списъка Кой е онлайн. Как става това?',
		1 => 'Във вашия профил има специална опция за това: <i>Скриване на вашия онлайн статус</i>. Ако я включите, името ви ще бъде видимо само за администраторите и за вас. За останалите потребители ще сте Скрит.'
	),
	array(
		0 => 'Забравих си паролата!',
		1 => 'Без паника! Не е възможно да получите старата си парола, но за сметка на това ще ви бъде сменена с нова. За да получите новата си парола по мейл, отидете на Вход и кликнете <u>Забравих си паролата!</u>. След това просто следвайте инструкциите и ще получите нова парола за нула време!'
	),
	array(
		0 => 'Добре, регистрирах се, но не мога да вляза!',
		1 => 'Първо проверете дали сте въвели правилно името и паролата си. Ако те са правилни, тогава едно от следните две неща може би се е случило. Ако е включена COPPA-поддръжката и вие сте кликнали на <u>Съгласен съм със тези условия и възрастта ми е <b>под</b> 13 години</u> при регистрацията тогава трябва да следвате инструкциите, които са ви изпратени. Ако това не е вашия случай, сигурно вашия потребител трябва да се активира. Форумите могат да бъдат настроени така, че да се налага всички нови регистрации да бъдат активирани или лично от потребителя, или от администраторите. След като сте се регистрирали, би трябвало да ви е била представена информация дали е необходима активация на потребителя. В случай, че активацията е задължителна, би трябвало да сте получили мейл с инструкции. Ако не сте, сигурни ли сте, че сте въвели правилен мейл адрес? Една от основните причини, поради които се използва активация е да се намали риска от потребители, злоупотребяващи с форумите. Ако сте сигурен, че мейл адреса ви е правилен, най-добре потърсете съдействие от администраторите.'
	),
	array(
		0 => 'Регистрирах се преди известно време, но сега не мога да вляза?!',
		1 => 'Двете най-вероятни причини за това са: въвели сте неправилни име и парола (сверете с мейла, който сте получили при регистрация) или потребителят ви е бил изтрит. Ако става дума за втория случай, да не би случайно да не сте писали нищо по форумите за дълго време? Нормална практика на натоварени форуми е администраторите да изтриват периодично потребители, който не са били активни продължително време, за да се намали размера на базата данни. Свържете се с администраторите за информация. Можете да се регистрирате отново, и този път се опитайте да бъдете по-активни!'
	),
	array(
		0 => 'Какво е COPPA?',
		1 => 'COPPA или (Child Online Privacy and Protection Act of 1998) е закон в Щатите, изискващ от сайтовете, които събират информация от хора под 13 години родителско съгласие.',
	),
	array(
		0 => 'Защо не мога да се регистрирам?',
		1 => 'Възможно е администратора на форума да е баннал вашия IP адрес или името с което се опитвате да се регистрирате е вече заето/забранено. Собственика може да е спрял временно регистрацията на потребители, за повече информация се свържете с администратора.',
	),
	array(
		0 => 'Какво всъщност прави "Изтрии всички бисквитки"?',
		1 => 'Изтрий всички бисквитки изтрива бисквитките създадени от phpBB3 които запомнят вашата регистрация и ви поддържат включен.',
	),
	array(
		0 => '--',
		1 => 'Потребителски настройки'
	),
	array(
		0 => 'Как да си променя настройките?',
		1 => 'Всички ваши настройки (ако сте регистриран) се съхраняват в база данни. За да ги промените, кликнете на връзката <u>Профил</u> (по принцип се намира на върха на страниците, но това зависи от Темата на форумите). Това ще ви позволи да промените настройките си.'
	),
	array(
		0 => 'Времето не е правилно!',
		1 => 'Времето най-вероятно е точно, но вие го гледате в различна часова зона от вашата. Ако това е проблема, би трябвало да промените настройките си, така че форумите да показват времето във вашата часова зона, например Лондон, Париж, Ню Йорк, Сидни. Моля обърнете внимание, че часовата зона, както и повечето от настройките могат да бъдат задавани само от регистрирани потребители. Така че, ако не сте се регистрирали, точно сега е време да го направите!'
	),
	array(
		0 => 'Промених часовата зона, но времето все още е грешно!',
		1 => 'Ако сте сигурни, че сте избрали правилната зона и времената все пак са невярни, най-вероятно проблема е в промяната на времето през лятото (която се използва в някои страни). Форумите не могат да отчитат този ефект, така че е вероятно по време на летните месеци времената да се различават с 1 час от реалното местно време.'
	),
	array(
		0 => 'Родния ми език го няма в списъка!',
		1 => 'Най-вероятните причини за това са: администраторите не е инсталрал файлове с вашия език или никой не е превел форума на вашия език. Попитайте администраторите дали има наличен файл с вашия език, който да инсталират, а ако няма и вие имате желание, можете да създадете такъв. Повече информация за локализирането на phpBB можете да намерите на сайта на phpBB Group (вижте адреса в дъното на страниците).'
	),
	array(
		0 => 'Как да поставя изображение под името ми?',
		1 => 'При разглеждане на теми под името ви могат да стоят 2 картинки. Първата е асоциирана с вашия ранг; по принцип тези картинки са под формата на звездички, показваше колко мнения сте пуснали на форумите или пък вашия статут на тези форуми. Под ранговата картинка би могла да стои друга, по-голяма, позната като Аватар, която по принцип е уникална или лична за всеки потребител. От администраторите на форумите зависи дали ползването на Аватари ще е разрешено, и ако е, от къде да се вземат Аватарите. Ако не можете да използвате Аватар, то това е желанието на администраторите. Можете да ги попитате за причините, но ви гарантираме, че има сериозни такива!'
	),
	array(
		0 => 'Как да си променя ранга?',
		1 => 'По принцип не можете директно да промените ранга си (който се показва под името ви в темите и в профила ви, в зависимост от Темата на форума). В повечето форуми ранговете се използват за да индицират броя мнения, които е пуснал потребителя, или да отличат специални потребители, например модератори, администратори и т.н.. Моля не злоупотребявайте с форумите, като пускате излишни мнения, само за да повишите ранга си. Лесното е за модераторите и администраторите да ви изтрият ненужните мнения и да ви върнат обратно в началото, а още по-лесно е да ви изгонят.'
	),
	array(
		0 => 'Когато кликна на мейла на някой потребител, форума иска да вляза?!',
		1 => 'Само регистрирани потребители могат да изпращат мейл на други потребители чрез вградената мейл форма (ако администраторите са позволили това, разбира се). Това се прави с цел да се предпазят регистрираните от злоупотреба от страна на анонимни потребители.'
	),
	array(
		0 => '--',
		1 => 'Въпроси за писането на съобщения'
	),
	array(
		0 => 'Как да създам тема във форум?',
		1 => 'Лесно, кликнете на съответния бутон на страницата на някой форум или тема. Може да се наложи да се регистрирате, за да пуснете тема. Какво ви е разрешено да правите във даден форум е показано в дъното на страницата на даден форум или тема (под формата на <i><b>Можете</b> да пускате нови теми, <b>Не Можете</b> да променяте съобщенията си</i> и т.н.)'
	),
	array(
		0 => 'Как да променя или изтрия мнение?',
		1 => 'Освен ако не сте администратор или модератор, можете да променяте или изтривате само собствените си мнения. Можете да промените съобщението си като кликнете на бутона <i>Промяна</i> за съответното мнение. Ако някой вече е отговорил на мнението ви, в дъното на мнението ви ще се появи кратък текст, който индикира колко пъти и кога за последно сте променили мнението си. Ако никой не е отговорил на съобщение ви, този текст не ви показва. Този текст няма да се показва и ако администратор или модератор е променил съобщението (те най-вероятно ще оставят съобщение какво и защо са променили). Моля забележете, че обикновените потребители не могат да изтриват мненията си след като им е било отговорено.'
	),
	array(
		0 => 'Как да добавя подпис към съобщенията си?',
		1 => 'За да добавите подпис към съобщение, първо трябва да си направите такъв. Това става във вашия Профил. След като си направите подпис, можете да включите опцията <i>Добави подпис</i> от формата за пускане на съобщение, за да добавите подписа в края на съобщението. Също така, можете да включите от Профила си опцията за автоматично добавяне на подписа.'
	),
	array(
		0 => 'Как да пусна анкета?',
		1 => 'Когато пускате нова тема, ще видите отделна форма за <i>Добавяне на анкета</i> точно под главната форма за писане на съобщение. Ако няма форма за добавяне на анкета, най-вероятно нямате такива права в този форум. Трябва да въведете заглавие на анкетата и поне два възможни отговора. За да добавите възможен отговор, въведете текст и натиснете бутона <i>Добавете възможен отговор</i>. Можете също да укажете време, за което анкетата да бъде активна, като 0 ще резултира в безкрайна анкета. Има лимит за възможните отговори, които можете да добавите, който се определя от администраторите.'
	),
	array(
		0 => 'Как да променя или изтрия анкета?',
		1 => 'Също както при съобщенията, анкетите могат да бъдат променяни само от техния автор, от модераторите и администраторите. За да промените анкета, изберете за промяна мнението, което съдържа анкетата (винаги първото мнение в дадена тема). Ако никой не е гласувал на анкетата, можете я промените или изтриете. Ако обаче има поставени гласове, само модераторите и администраторите могат да променят или изтрият анкетата. Това е предпазна мярка срещу хора, злоупотребяващи с анкетите, променяйки възможните отговори след като са постъпили гласове.'
	),
	array(
		0 => 'Как да променя или изтрия анкета?',
		1 => 'Също като при мненията, анкетите могат да се променят от потребителя, който ги е пуснал, модератор и администратор. За да промените анкета, натиснете "промени" в първото мнение от нея(вашето); първото мнение винаги е асоцирано с анкетата. Ако никой не е гласувал, потребителя може дори да промени изцяло анкетата, но ако някой е гласувал само модератори и администратори могат да правят промени.'
	),
	array(
		0 => 'Защо не мога да вляза в даден форум?',
		1 => 'Някои форуми могат да бъдат конфигурирани да позволяват достъп само на определени потребители или групи. За да ги видите, разгледате, пишете и т.н. в тези форуми, ще се нуждаете от специален достъп, който може да ви бъде даден само от модераторите и администраторите. Препоръчваме да се свържете с тях.'
	),
	array(
		0 => 'Защо не мога да прикачвам файлове?',
		1 => 'Правата за прикачване на файлове се избират по-група, форум или подфорум. TАдминистратора на форума може да е забранил качването на файлове във въпросният форум или във вашата група. Свържете се с администратора за повече информация.'
	),
	array(
		0 => 'Защо получих предупреждение?',
		1 => 'Във всеки форум има различни правила. Възможно е да сте получили предупреждение, защото сте нарушили някое от правилата. Решението се взема от администратора, phpBB групата няма нищо общо с това. Свържете се с администратора за повече информация.'
	),
	array(
		0 => 'Как да докладвам за мнения на модератор?',
		1 => 'Ако администратора е разрешил докладването с/у всяко мнения трябва да виждате бутон докладвай. Натиснете на него и следвайте инструкциите..'
	),
	array(
		0 => 'За какво служи бутона “Запази” в дъното на страницата за публикуване на тема/мнение?',
		1 => 'Позволява ви да запазите мнението си и да го публикувате по-късно. За да видите всичките си запазени мнение влезте в потребителският контролен панел.'
	),
	array(
		0 => 'Защо мнението ми трябва да бъде одобрявано?',
		1 => 'Администратора на форума така е решил. Настройките се прилагат за форуми, подфоруми и групи. За повече информация се свържете с администратора.'
	),
	array(
		0 => 'Как да избутам темата си?',
		1 => 'Като натиснете бутона "Избутай темата", по този начин вашата тема ще се появи отново на началната страница за въпросният форум.'
	),
	array(
		0 => '--',
		1 => 'Форматиране и видове теми'
	),
	array(
		0 => 'Какво е BBCode?',
		1 => 'BBCode е специална имплементация на HTML. Дали можете да ползвате BBCode във вашите съобщения или не, се определя от администраторите. Освен това, можете да изключите BBCode за дадено съобщение от формата за писане на съобщения. BBCode прилича много на HTML, използват се тагове, които са затворени в квадратни скоби (ето така: [таг]), а не в < и >. За повече информация, вижте специалното упътване за BBCode, към което има връзка от страницата за пускане на мнение.'
	),
	array(
		0 => 'Мога ли да ползвам HTML?',
		1 => 'Това също се определя от администраторите, които имат пълен контрол над функцията (например могат да позволят само определени HTML тагове). Ако HTML е разрешен, най-вероятно ще откриете, че само определени тагове работят. Това е предпазна мярка, целяща да предотвари злоупотребата с някои тагове, които могат да развалят външния вид на форумите, или да причинят други проблеми. Ако HTML е разрешен, все пак можете да го изключите за определени мнения по ваше желание (от страницата за пускане на мнения)'
	),
	array(
		0 => 'Какво са Smilies?',
		1 => 'Smileys, или Emoticons са малки изображения, които могат да бъдат използвани, за да се изразят емоции, с помощта на кратък код, например :) означава усмивка, а :( означава нацупване. Пълният списък с emoticons може да бъде видян в страницата за пускане на мнения. Все пак не прекалявайте с smileys, защото те лесщо превръщат мнението ви в нечетимо и модераторите могат да решат да го променят или дори изтрият!'
	),
	array(
		0 => 'Мога ли да прилагам картинки към съобщенията си?',
		1 => 'Да, можете. В момента обаче форума не позволява ъплоуд на картинките ви на сървъра. Затова трябва да сте качили картинката някъде, преди да можете да я приложите към съобщението ви (например http://www.some-unknown-place.net/my-picture.gif). Не можете да прилагате картинки, намиращи се на вашия компютър (освен ако е публично достъпен сървър!), или намиращи се зад някакъв защитен механизъм, като например мейлбоксове на hotmail или yahoo, сайтове, защитени с парола и т.н. За да приложите картинка, използвайте съответния BBCode таг [img] или HTML (ако е разрешен).'
	),
	array(
		0 => 'Какво е ГЛОБАЛНО СЪОБЩЕНИЕ?',
		1 => 'Виж долу "Какво е Съобщение", глобалното съобщение е абсолютно същото нещо, само че се появява във всички форуми и подфоруми.'
	),
	array(
		0 => 'Какво е Съобщение?',
		1 => 'СЪОБЩЕНИЯТА съдържат важна информация и непременно трябва да ги четете възможно най-скоро! СЪОБЩЕНИЯТ се показват най-горе на всяка страница на форума, в който са пуснати. Кой има права да пуска СЪОБЩЕНИЯ се определя от администраторите.'
	),
	array(
		0 => 'Какво е Важна Тема?',
		1 => 'Важните Теми се показват във форума над всички останали теми, но под СЪОБЩЕНИЯТА и само на първата страница от форума. Обикновено също включват важна информация, така че е добре да четете и тях, когато е възможно. Както при СЪОБЩЕНИЯТА, администраторите решават кой има право да пуска Важни Теми за определен форум.'
	),
	array(
		0 => 'Какво е Заключена тема?',
		1 => 'Темите могат да бъдат заключвани от модераторите или администраторите. не можете да отговаряте на заключени теми и всяка анкета бива автоматично прекратена. Има много причини, поради които дадена тема може да бъде заключена.'
	),
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => 'Какво означават иконите на темите?',
		1 => 'Автора на темата избира каква икона да се покаже от даден пакет. Администратора на форума трябва да е позволил тази функция.'
	),
	array(
		0 => '--',
		1 => 'Потребителски нива и групи'
	),
	array(
		0 => 'Какво е Администратор?',
		1 => 'Администраторите са хората с най-големи права и контрол във форумите. Те контролират всички функции и настройки на форума, което включва задаване на права, изгонване на потребители, създаване на потребителски групи и модератори, и т.н.. Освен това, те имат пълни модераторски права във всички форуми.'
	),
	array(
		0 => 'Какво е Модератор?',
		1 => 'Модераторите са потребители (или групи такива), чиято работа е да наглеждат форумите ежедневно. Те имат правата да променят или изтриват мнения, както и да заключват, отключват, местят и разделят теми във форума, който модерират. Като цяло, модераторите се избират, за да предотврятяват пускането на обиден и незаконен материал, както и излизането от темата (или пускането на мнения, които нямат връзка с дискусията).'
	),
	array(
		0 => 'Какво е Потребителска Група?',
		1 => 'Потребителските групи са средство за обединяване на потребител. Всеки потребител може да участва в няколко групи (за разлика от други форум системи) и всяка група може да има индивидуални права. Така администраторите могат лесно да назначат няколко потребители за модератори на форум, или да дадат достъп на група потребители до личен (скрит) форум, и т.н.'
	),
	array(
		0 => 'Как да се присъединя към Потребителска група?',
		1 => 'За да се присъедините към дадена потребителска група, кликнете на линка Потребителски групи в началото на страницата; ще видите всички потребителски групи. Не всички групи са отворени за членове, някои са затворени, а при някои членовете са скрити. Ако групата е отворена, можете да изискате членство като кликнете на съответния бутон. Модератора на групата трябва да одобри молбата ви. Той може да се свърже с вас за детайли. Моля не се обвинявайте модератора ако не ви приеме в групата, със сигурност има причини за това.'
	),
	array(
		0 => 'Как да стана Модератор на Потребителска Група?',
		1 => 'Потребителските групи се създават от администраторите, които избират и модератора на групата. Ако искате лична потребителска група, ня която да сте модератор, би трябвало да се свържете с администраторите. Пратете им лично съобщение например.'
	),
	array(
		0 => 'Защо някои потребителски групи са в различен цвят?',
		1 => 'Администратора на форума може да променя това.'
	),
	array(
		0 => 'Какво е “група по подразбиране”?',
		1 => 'Ако сте член на повече от една потребителски групи, цвета на името ви, правата и други ще се водят по вашата група по подразбиране.'
	),
	array(
		0 => 'Какво означава линка “Екип”?',
		1 => 'В тази страница ще намерите информация за екипа на форума.'
	),
	array(
		0 => '--',
		1 => 'Лични съобщения'
	),
	array(
		0 => 'Не мога да изпращам лични съобщения!',
		1 => 'Има три потенциални причини за това: не сте регистриран и/или не сте влязъл, администраторите са забранили личните съобщения за всички, или администраторите са забранили личните съобщения само за вас. Ако става дума за последното, можете да се свържете с администраторите и да попитате каква е причината.'
	),
	array(
		0 => 'Получавам нежелани лични съобщения!',
		1 => 'В бъдещи версии на този софтуер ще бъде добавена функция за игнориране на потребители. За сега, обаче, всичко, което можете да направите, ако получавате нежелани съобщения, е да се свържете с администраторите на форума, които могат да забранят на досадния потребител да праща лични съобщения.'
	),
	array(
		0 => 'Получих спам (или друг обиден мейл) от някой от тези форуми!',
		1 => 'Съжаляваме да чуем това. Мейл формата, от която е бил пунат този мейл има някои функции, позволяващи да се проследи кой потребител е изпратил съобщението. Изпратете на администратора пълно копие на мейла, който сте получили. Много важно е да включите и хедърите на съобщението! Администраторите ще се погрижат за проблемния потребител.'
	),
	array(
		0 => '--',
		1 => 'Приятели и Врагове'
	),
	array(
		0 => 'Списък приятели и врагове',
		1 => 'Вие можете да използвате този списък за да организирате потребителите във форума. Потребители добавени в приятелската листа ще бъдат показвани в твоя контролен панел за бърз достъп до техния статус и евентуално за изпращане на лични съобщения. Ако добавите потребител към списъка с враговете, вие няма да видите нито едно негово мнения, те ще бъдат скривани по подразбиране.'
	),
	array(
		0 => 'Как мога да добавям/изтривам потребители от моят списък с приятели/врагове?',
		1 => 'Вие можете да добавите потребител по два начина. Единия е през профила на потребителя, другият начин е през контролния панел. От там директно въвеждате имена, съответно и да изтривате.'
	),
	array(
		0 => '--',
		1 => 'Търсене във форума'
	),
	array(
		0 => 'Как мога да търся във форум?',
		1 => 'Когато влезете в някой форум/тема долу в ляво има поле в което можете да въведете търсената от вас фраза. За подробно търсене кликнете на връзката търсене, която е включена във всички страници на форума.'
	),
	array(
		0 => 'Защо не намирам нищо?',
		1 => 'Вероятно термините, които ползвате са много често срещани и не са индексирани от phpBB3. Бъдете по-специфичен и използвайте допълнителните опции.'
	),
	array(
		0 => 'Защо търсенето връща бяла страница!?',
		1 => 'Търсачката е намерила прекалено много резултати и сървъра не може да се справи с тях. Използвайте допълнителните опции при търсенето за да нямате тази проблеми.'
	),
	array(
		0 => 'Как да търся потребители?',
		1 => 'Отиди на страницата за потребители и кликни "намери потребител".'
	),
	array(
		0 => 'Как да намеря личните си теми и мнения?',
		1 => 'Вашите лични мнения могат да бъдат открити след клик на "Намери мненията на потребителя" в контролния панел или през собствения ви профил. За да търсите за личните си теми, използвайте търсачката на форума.'
	),
	array(
		0 => '--',
		1 => 'Абонаменти и Записки'
	),
	array(
		0 => 'Каква е разликата м/у абонаментите и записките?',
		1 => 'Записките в phpBB3 са като записките във вашия уеб-браузър. Когато имате абонамент за тема/форум, при всяка промяна вие ще бъдете уведомявани.'
	),
	array(
		0 => 'Как да запиша абонамент за форум или тема?',
		1 => 'За да направите абонамент на форум, трябва да кликнете на връзката "абонирай се за форума" която съществува във всеки форум. Стъпките при абонамент за тема са същите.'
	),
	array(
		0 => 'Как да премахна абонаментите?',
		1 => 'Влезте в контролния панел, там ще намерите информация.'
	),
	array(
		0 => '--',
		1 => 'Прикачени файлове'
	),
	array(
		0 => 'Прикачените файлове позволени ли са за този форум?',
		1 => 'Всеки администратор на форума решава дали да разреши или да забрани тази функция. Ако не знаеш дали в този форум прикачването на файлове е позволено обърни се към администратора.'
	),
	array(
		0 => 'Как да намеря всички мой прикачени файлове',
		1 => 'За да откриете всички ваши прикачени файлове, отидете в контролния панел, там ще намерите повече информация.'
	),
	array(
		0 => '--',
		1 => 'phpBB 3'
	),
	array(
		0 => 'Кой е написал phpBB3 ?',
		1 => 'Този софтуер е създаден и защитен от авторско право от <a href="http://www.phpbb.com/">phpBB Group</a>. Създаден е под GNU General Public Licens и може приятелски да се разпространявам, вижте връзката за повече информация.'
	),
	array(
		0 => 'Защо X фунцията не е налична?',
		1 => 'Софтуера е писан и лицензиран от phpBB Group. Ако мислите, че трябва да се добави някаква функцията влезте в сайта на системата (phpbb.com) и пишете във форума.'
	),
	array(
		0 => 'Към кой да се обърна, ако намеря нелегални материали на този форум?',
		1 => 'Вие трябва да се обърнете към администратора на този форум. Ако не можете да намерите администратора, свържете се с модераторите на форума и питайте към кой да се обърнете. Ако все още не знаете какво да правите, свържете се със собствените на домейн името (използвайте whois записите). phpBB не носи никаква отговорност за нещата, които се пишат в този форум.'
	)
);

?>