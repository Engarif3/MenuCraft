-- Fully PostgreSQL-compatible dump for your Render DB
-- Tables: category, dish, doctrine_migration_versions

-- CATEGORY TABLE
DROP TABLE IF EXISTS category;

CREATE TABLE category (
  id SERIAL PRIMARY KEY,
  category_name VARCHAR(255) NOT NULL
);

INSERT INTO category (id, category_name) VALUES
(7,'Salad'),
(8,'Dessert'),
(9,'Soup'),
(10,'Pizza'),
(11,'Noodle'),
(12,'Burger');

-- DISH TABLE
DROP TABLE IF EXISTS dish;

CREATE TABLE dish (
  id SERIAL PRIMARY KEY,
  category_id INTEGER NOT NULL,
  name VARCHAR(255) NOT NULL,
  description TEXT NOT NULL,
  image VARCHAR(255) DEFAULT NULL,
  price NUMERIC(5,2) NOT NULL,
  CONSTRAINT FK_dish_category FOREIGN KEY (category_id) REFERENCES category(id)
);

INSERT INTO dish (id, category_id, name, description, image, price) VALUES
(11,12,'Vegetable Burger','A veggie burger or meatless burger is a hamburger made with a patty that does not contain meat, or the patty of such a hamburger. The patty may be made from ingredients like beans (especially soybeans and tofu), nuts, grains, seeds, or fungi such as mushrooms or mycoprotein.','/uploads/images/674c107d88a19.jpg',9.00),
(12,12,'Chicken','A veggie burger or meatless burger is a hamburger made with a patty that does not contain meat, or the patty of such a hamburger. The patty may be made from ingredients like beans (especially soybeans and tofu), nuts, grains, seeds, or fungi such as mushrooms or mycoprotein.','/uploads/images/674c10dab8399.jpg',10.00),
(13,9,'Thai soup','Thai Coconut Soup is an easy Asian-inspired soup recipe loaded with fresh vegetables in a rich, vegan coconut milk curry broth. It includes instructions for Instant Pot or stove.','/uploads/images/67536638ce529.jpg',15.00),
(14,10,'Italian pizza','Flatbreads are some of the earliest forms of pizza, as breads with toppings can be found in many of the earliest food cultures. For instance, the Persian army in the 6th century BC ate flatbreads topped with cheese and dates under the command of Darius the Great.','/uploads/images/675366f48c308.webp',12.00),
(15,11,'Soy sauce egg noodle','These pan-fried Cantonese soy sauce noodles are often served as a side dish (similar to fried rice), accompanied by various meat, vegetable dishes and dim sum dishes.','/uploads/images/675dd171e8ccc.jpg',14.90),
(16,8,'Vegan tiramisu with chocolate cream and cherries','This vegan tiramisu dessert recipe with chocolate cream is super easy, totally delicious and can be served either in a glass or in a classic casserole dish.','/uploads/images/675dd1f415197.webp',12.65);

-- DOCTRINE MIGRATION VERSIONS TABLE
DROP TABLE IF EXISTS doctrine_migration_versions;

CREATE TABLE doctrine_migration_versions (
  version VARCHAR(191) NOT NULL,
  executed_at TIMESTAMP DEFAULT NULL,
  execution_time INTEGER DEFAULT NULL,
  PRIMARY KEY (version)
);

INSERT INTO doctrine_migration_versions (version, executed_at, execution_time) VALUES
('DoctrineMigrations\\Version20241120193242','2024-11-20 20:33:21',1303),
('DoctrineMigrations\\Version20241122012922','2024-11-22 02:29:32',309);
