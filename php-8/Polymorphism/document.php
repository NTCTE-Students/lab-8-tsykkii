<?php
// Базовый класс Document с методом save
abstract class Document {
    abstract public function save();
}

// Класс PDFDocument для сохранения в формате PDF
class PDFDocument extends Document {
    public function save() {
        print("Документ сохранен в формате PDF.<br>");
    }
}

// Класс WordDocument для сохранения в формате Word
class WordDocument extends Document {
    public function save() {
        print("Документ сохранен в формате Word.<br>");
    }
}

// Класс ExcelDocument для сохранения в формате Excel
class ExcelDocument extends Document {
    public function save() {
        print("Документ сохранен в формате Excel.<br>");
    }
}

// Создаем объекты для каждого типа документа
$pdfDocument = new PDFDocument();
$wordDocument = new WordDocument();
$excelDocument = new ExcelDocument();

// Тестируем сохранение документов
$pdfDocument->save();
$wordDocument->save();
$excelDocument->save();