-- Shows a example for the question to a bundle product

SELECT *
FROM `Products` AS p1
  LEFT JOIN `ProductToOptions` AS o ON o.productId = p1.id
  LEFT JOIN `Products` AS p2 ON p2.id = o.optionProductId
  LEFT JOIN `ProductsToComponents` AS pc ON pc.productId = p2.id
  LEFT JOIN `Components` AS c ON c.componentId = pc.componentId
WHERE p1.id = 72