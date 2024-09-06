# BaseSEO 3
Базовый набор tv для SEO в EVOLUTION 3.x. Не является необходимым и достаточным решением и не гарантирует каких-либо результатов в поисковой выдаче. Используйте пакет как заготовку для последующей работы по поисковой оптимизации и настроек представления сайта на других ресурсах.

## Установка
- Code - Download ZIP
- Открыть в админке Extras и воспользоваться опцией "Установка из архива"

## Что в пакете
### TV-параметры
+ Meta title (`meta_title`) - для заголовка страницы, отредактируйте шаблон в `/views/parts/meta.blade.php`

+ Meta description (`meta_description`) - для сниппета, отредактируйте шаблон в `/views/parts/meta.blade.php`

+ Изображение для соц.сетей (`image_src`) - изображение по умолчанию для ссылок в соц.сетях и мессенджерах, минимальный размер для ВК 537x240px, в `/views/parts/meta.blade.php` по умолчанию подтягивается `img/socials.png`

+ Индексировать страницу (`meta_noindex`) - галочка для управления индексацией страницы, если установлена - в код страницы будет вставляться строчка `<meta name="robots" content="noindex, nofollow">`, рекомендуется использовать в паре с параметром "Доступен для поиска" (`searchable`)

+ Частота обновления для карты сайта (`sitemap_changefreq`) - по умолчанию `monthly`

+ PageRank (`sitemap_priority`) - по умолчанию `0.5`

### Файлы
+ `/views/parts/meta.blade.php` - вывод базового набора мета-информации о странице

Не забудьте добавить `prefix="og: http://ogp.me/ns#"` для тега `html`.