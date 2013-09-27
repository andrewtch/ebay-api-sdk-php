'use strict';

var grunt = require('grunt');
var path = require('path');
var helper = require('./helpers');

exports.transform = {

    setUp: function (callback) {
        this.ebay = grunt.file.readJSON('test/fixtures/ebay.json');
        this._ = grunt.util._;

        callback();
    },

    directoriesAreCreated: function (test) {
        test.expect(2);

        this._.forEach(this.ebay.services, function (service) {
            helper.isCreated(test, path.join('.tmp/transformed', service.name, service.version, 'src/DTS/eBaySDK/', service.name));
        });

        test.done();
    },

    filesAreCreated: function (test) {
        var service = this.ebay.services[0];
        var version = service.version;

        test.expect(10);

        helper.isCreated(test, path.join('.tmp/transformed', service.name, version, 'src/DTS/eBaySDK/', service.name, 'AnotherType.php'));
        helper.isCreated(test, path.join('.tmp/transformed', service.name, version, 'src/DTS/eBaySDK/', service.name, 'Base64BinaryType.php'));
        helper.isCreated(test, path.join('.tmp/transformed', service.name, version, 'src/DTS/eBaySDK/', service.name, 'BooleanType.php'));
        helper.isCreated(test, path.join('.tmp/transformed', service.name, version, 'src/DTS/eBaySDK/', service.name, 'ComplexType.php'));
        helper.isCreated(test, path.join('.tmp/transformed', service.name, version, 'src/DTS/eBaySDK/', service.name, 'DecimalType.php'));
        helper.isCreated(test, path.join('.tmp/transformed', service.name, version, 'src/DTS/eBaySDK/', service.name, 'DoubleType.php'));
        helper.isCreated(test, path.join('.tmp/transformed', service.name, version, 'src/DTS/eBaySDK/', service.name, 'IntegerType.php'));
        helper.isCreated(test, path.join('.tmp/transformed', service.name, version, 'src/DTS/eBaySDK/', service.name, 'StringType.php'));
        helper.isCreated(test, path.join('.tmp/transformed', service.name, version, 'src/DTS/eBaySDK/', service.name, 'TokenType.php'));
        helper.isCreated(test, path.join('.tmp/transformed', service.name, version, 'src/DTS/eBaySDK/', service.name, 'URIType.php'));

        test.done();
    },

    phpIsGenerated: function (test) {
        var service = this.ebay.services[0];
        var version = service.version;
        var testPath = path.join('.tmp/transformed', service.name, version, 'src/DTS/eBaySDK/', service.name);
        var actual;
        var expected;

        test.expect(12);

        actual = grunt.file.read(path.join(testPath, 'AnotherType.php'));
        expected = grunt.file.read('test/expected/AnotherType.php');
        test.equal(actual, expected, 'should generate PHP for class AnotherType.');

        actual = grunt.file.read(path.join(testPath, 'Base64BinaryType.php'));
        expected = grunt.file.read('test/expected/Base64BinaryType.php');
        test.equal(actual, expected, 'should generate PHP for class Base64BinaryType.');

        actual = grunt.file.read(path.join(testPath, 'BooleanType.php'));
        expected = grunt.file.read('test/expected/BooleanType.php');
        test.equal(actual, expected, 'should generate PHP for class BooleanType.');

        actual = grunt.file.read(path.join(testPath, 'ComplexType.php'));
        expected = grunt.file.read('test/expected/ComplexType.php');
        test.equal(actual, expected, 'should generate expected PHP for class ComplexType.');

        actual = grunt.file.read(path.join(testPath, 'DecimalType.php'));
        expected = grunt.file.read('test/expected/DecimalType.php');
        test.equal(actual, expected, 'should generate PHP for class DecimalType.');

        actual = grunt.file.read(path.join(testPath, 'DoubleType.php'));
        expected = grunt.file.read('test/expected/DoubleType.php');
        test.equal(actual, expected, 'should generate PHP for class DoubleType.');

        actual = grunt.file.read(path.join(testPath, 'EnumStringType.php'));
        expected = grunt.file.read('test/expected/EnumStringType.php');
        test.equal(actual, expected, 'should generate PHP for class EnumStringType.');

        actual = grunt.file.read(path.join(testPath, 'EnumTokenType.php'));
        expected = grunt.file.read('test/expected/EnumTokenType.php');
        test.equal(actual, expected, 'should generate PHP for class EnumTokeType.');

        actual = grunt.file.read(path.join(testPath, 'IntegerType.php'));
        expected = grunt.file.read('test/expected/IntegerType.php');
        test.equal(actual, expected, 'should generate PHP for class IntegerType.');

        actual = grunt.file.read(path.join(testPath, 'StringType.php'));
        expected = grunt.file.read('test/expected/StringType.php');
        test.equal(actual, expected, 'should generate PHP for class StringType.');

        actual = grunt.file.read(path.join(testPath, 'TokenType.php'));
        expected = grunt.file.read('test/expected/TokenType.php');
        test.equal(actual, expected, 'should generate PHP for class TokenType.');

        actual = grunt.file.read(path.join(testPath, 'URIType.php'));
        expected = grunt.file.read('test/expected/URIType.php');
        test.equal(actual, expected, 'should generate PHP for class URIType.');

        test.done();
    }
};
