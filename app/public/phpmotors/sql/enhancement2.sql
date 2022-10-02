INSERT INTO clients(
    clientFirstname
    , clientLastname
    , clientEmail
    , clientPassword
    , comment
) VALUES (
    'Tony'
    , 'Stark'
    , 'tony@starkent.com'
    , 'Iam1ronM@n'
    , 'I am the real Ironman'
);

UPDATE clients SET clientLevel = '1' WHERE clientId = 1;

UPDATE inventory SET invDescription = REPLACE(invDescription, 'small interiors', 'spacious interior') WHERE invId = 12;

SELECT 
    inv.invModel 
    , cc.classificationName 
FROM inventory inv 
INNER JOIN carclassification cc ON inv.classificationId = cc.classificationId 
WHERE cc.classificationName = 'SUV';

DELETE FROM inventory WHERE invId = 1;

UPDATE inventory SET invImage = CONCAT('/phpmotors', invImage);
