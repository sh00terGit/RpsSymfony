-- генерация сеттеров и геттеров
php app/console doctrine:generate:entities Nod4/Bundle/AdminBundle/Entity/MenuType

-- маппинг в базу 
php app/console doctrine:schema:update --force

--- импорт в хмл базы
 php bin/console doctrine:mapping:import --force AppBundle xml


удаляем хмл ненужное

php bin/console doctrine:mapping:convert annotation ./src

конвертируем импорт в объекты



-- генерация формы
php bin/console generate:doctrine:form AcmeBlogBundle:Post