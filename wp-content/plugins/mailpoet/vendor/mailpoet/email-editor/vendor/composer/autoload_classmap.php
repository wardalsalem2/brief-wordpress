<?php
if (!defined('ABSPATH')) exit;
// autoload_classmap.php @generated by Composer
$vendorDir = dirname(__DIR__);
$baseDir = dirname($vendorDir);
return array(
 'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
 'MailPoet\\EmailEditor\\AccessDeniedException' => $baseDir . '/src/exceptions.php',
 'MailPoet\\EmailEditor\\ConflictException' => $baseDir . '/src/exceptions.php',
 'MailPoet\\EmailEditor\\Container' => $baseDir . '/src/class-container.php',
 'MailPoet\\EmailEditor\\Engine\\Dependency_Check' => $baseDir . '/src/Engine/class-dependency-check.php',
 'MailPoet\\EmailEditor\\Engine\\Email_Api_Controller' => $baseDir . '/src/Engine/class-email-api-controller.php',
 'MailPoet\\EmailEditor\\Engine\\Email_Editor' => $baseDir . '/src/Engine/class-email-editor.php',
 'MailPoet\\EmailEditor\\Engine\\Email_Styles_Schema' => $baseDir . '/src/Engine/class-email-styles-schema.php',
 'MailPoet\\EmailEditor\\Engine\\Patterns\\Abstract_Pattern' => $baseDir . '/src/Engine/Patterns/class-abstract-pattern.php',
 'MailPoet\\EmailEditor\\Engine\\Patterns\\Patterns' => $baseDir . '/src/Engine/Patterns/class-patterns.php',
 'MailPoet\\EmailEditor\\Engine\\PersonalizationTags\\HTML_Tag_Processor' => $baseDir . '/src/Engine/PersonalizationTags/class-html-tag-processor.php',
 'MailPoet\\EmailEditor\\Engine\\PersonalizationTags\\Personalization_Tag' => $baseDir . '/src/Engine/PersonalizationTags/class-personalization-tag.php',
 'MailPoet\\EmailEditor\\Engine\\PersonalizationTags\\Personalization_Tags_Registry' => $baseDir . '/src/Engine/PersonalizationTags/class-personalization-tags-registry.php',
 'MailPoet\\EmailEditor\\Engine\\Personalizer' => $baseDir . '/src/Engine/class-personalizer.php',
 'MailPoet\\EmailEditor\\Engine\\Renderer\\ContentRenderer\\Block_Renderer' => $baseDir . '/src/Engine/Renderer/ContentRenderer/class-block-renderer.php',
 'MailPoet\\EmailEditor\\Engine\\Renderer\\ContentRenderer\\Blocks_Parser' => $baseDir . '/src/Engine/Renderer/ContentRenderer/class-blocks-parser.php',
 'MailPoet\\EmailEditor\\Engine\\Renderer\\ContentRenderer\\Blocks_Registry' => $baseDir . '/src/Engine/Renderer/ContentRenderer/class-blocks-registry.php',
 'MailPoet\\EmailEditor\\Engine\\Renderer\\ContentRenderer\\Content_Renderer' => $baseDir . '/src/Engine/Renderer/ContentRenderer/class-content-renderer.php',
 'MailPoet\\EmailEditor\\Engine\\Renderer\\ContentRenderer\\Layout\\Flex_Layout_Renderer' => $baseDir . '/src/Engine/Renderer/ContentRenderer/Layout/class-flex-layout-renderer.php',
 'MailPoet\\EmailEditor\\Engine\\Renderer\\ContentRenderer\\Postprocessors\\Highlighting_Postprocessor' => $baseDir . '/src/Engine/Renderer/ContentRenderer/Postprocessors/class-highlighting-postprocessor.php',
 'MailPoet\\EmailEditor\\Engine\\Renderer\\ContentRenderer\\Postprocessors\\Postprocessor' => $baseDir . '/src/Engine/Renderer/ContentRenderer/Postprocessors/interface-postprocessor.php',
 'MailPoet\\EmailEditor\\Engine\\Renderer\\ContentRenderer\\Postprocessors\\Variables_Postprocessor' => $baseDir . '/src/Engine/Renderer/ContentRenderer/Postprocessors/class-variables-postprocessor.php',
 'MailPoet\\EmailEditor\\Engine\\Renderer\\ContentRenderer\\Preprocessors\\Blocks_Width_Preprocessor' => $baseDir . '/src/Engine/Renderer/ContentRenderer/Preprocessors/class-blocks-width-preprocessor.php',
 'MailPoet\\EmailEditor\\Engine\\Renderer\\ContentRenderer\\Preprocessors\\Cleanup_Preprocessor' => $baseDir . '/src/Engine/Renderer/ContentRenderer/Preprocessors/class-cleanup-preprocessor.php',
 'MailPoet\\EmailEditor\\Engine\\Renderer\\ContentRenderer\\Preprocessors\\Preprocessor' => $baseDir . '/src/Engine/Renderer/ContentRenderer/Preprocessors/interface-preprocessor.php',
 'MailPoet\\EmailEditor\\Engine\\Renderer\\ContentRenderer\\Preprocessors\\Spacing_Preprocessor' => $baseDir . '/src/Engine/Renderer/ContentRenderer/Preprocessors/class-spacing-preprocessor.php',
 'MailPoet\\EmailEditor\\Engine\\Renderer\\ContentRenderer\\Preprocessors\\Typography_Preprocessor' => $baseDir . '/src/Engine/Renderer/ContentRenderer/Preprocessors/class-typography-preprocessor.php',
 'MailPoet\\EmailEditor\\Engine\\Renderer\\ContentRenderer\\Process_Manager' => $baseDir . '/src/Engine/Renderer/ContentRenderer/class-process-manager.php',
 'MailPoet\\EmailEditor\\Engine\\Renderer\\Css_Inliner' => $baseDir . '/src/Engine/Renderer/interface-css-inliner.php',
 'MailPoet\\EmailEditor\\Engine\\Renderer\\Renderer' => $baseDir . '/src/Engine/Renderer/class-renderer.php',
 'MailPoet\\EmailEditor\\Engine\\Send_Preview_Email' => $baseDir . '/src/Engine/class-send-preview-email.php',
 'MailPoet\\EmailEditor\\Engine\\Settings_Controller' => $baseDir . '/src/Engine/class-settings-controller.php',
 'MailPoet\\EmailEditor\\Engine\\Templates\\Template' => $baseDir . '/src/Engine/Templates/class-template.php',
 'MailPoet\\EmailEditor\\Engine\\Templates\\Templates' => $baseDir . '/src/Engine/Templates/class-templates.php',
 'MailPoet\\EmailEditor\\Engine\\Templates\\Templates_Registry' => $baseDir . '/src/Engine/Templates/class-templates-registry.php',
 'MailPoet\\EmailEditor\\Engine\\Theme_Controller' => $baseDir . '/src/Engine/class-theme-controller.php',
 'MailPoet\\EmailEditor\\Engine\\User_Theme' => $baseDir . '/src/Engine/class-user-theme.php',
 'MailPoet\\EmailEditor\\Exception' => $baseDir . '/src/exceptions.php',
 'MailPoet\\EmailEditor\\HttpAwareException' => $baseDir . '/src/exceptions.php',
 'MailPoet\\EmailEditor\\Integrations\\Core\\Initializer' => $baseDir . '/src/Integrations/Core/class-initializer.php',
 'MailPoet\\EmailEditor\\Integrations\\Core\\Renderer\\Blocks\\Abstract_Block_Renderer' => $baseDir . '/src/Integrations/Core/Renderer/Blocks/class-abstract-block-renderer.php',
 'MailPoet\\EmailEditor\\Integrations\\Core\\Renderer\\Blocks\\Button' => $baseDir . '/src/Integrations/Core/Renderer/Blocks/class-button.php',
 'MailPoet\\EmailEditor\\Integrations\\Core\\Renderer\\Blocks\\Buttons' => $baseDir . '/src/Integrations/Core/Renderer/Blocks/class-buttons.php',
 'MailPoet\\EmailEditor\\Integrations\\Core\\Renderer\\Blocks\\Column' => $baseDir . '/src/Integrations/Core/Renderer/Blocks/class-column.php',
 'MailPoet\\EmailEditor\\Integrations\\Core\\Renderer\\Blocks\\Columns' => $baseDir . '/src/Integrations/Core/Renderer/Blocks/class-columns.php',
 'MailPoet\\EmailEditor\\Integrations\\Core\\Renderer\\Blocks\\Fallback' => $baseDir . '/src/Integrations/Core/Renderer/Blocks/class-fallback.php',
 'MailPoet\\EmailEditor\\Integrations\\Core\\Renderer\\Blocks\\Group' => $baseDir . '/src/Integrations/Core/Renderer/Blocks/class-group.php',
 'MailPoet\\EmailEditor\\Integrations\\Core\\Renderer\\Blocks\\Image' => $baseDir . '/src/Integrations/Core/Renderer/Blocks/class-image.php',
 'MailPoet\\EmailEditor\\Integrations\\Core\\Renderer\\Blocks\\List_Block' => $baseDir . '/src/Integrations/Core/Renderer/Blocks/class-list-block.php',
 'MailPoet\\EmailEditor\\Integrations\\Core\\Renderer\\Blocks\\List_Item' => $baseDir . '/src/Integrations/Core/Renderer/Blocks/class-list-item.php',
 'MailPoet\\EmailEditor\\Integrations\\Core\\Renderer\\Blocks\\Text' => $baseDir . '/src/Integrations/Core/Renderer/Blocks/class-text.php',
 'MailPoet\\EmailEditor\\Integrations\\Utils\\Dom_Document_Helper' => $baseDir . '/src/Integrations/Utils/class-dom-document-helper.php',
 'MailPoet\\EmailEditor\\InvalidStateException' => $baseDir . '/src/exceptions.php',
 'MailPoet\\EmailEditor\\NewsletterProcessingException' => $baseDir . '/src/exceptions.php',
 'MailPoet\\EmailEditor\\NotFoundException' => $baseDir . '/src/exceptions.php',
 'MailPoet\\EmailEditor\\RuntimeException' => $baseDir . '/src/exceptions.php',
 'MailPoet\\EmailEditor\\UnexpectedValueException' => $baseDir . '/src/exceptions.php',
 'MailPoet\\EmailEditor\\Validator\\Builder' => $baseDir . '/src/Validator/class-builder.php',
 'MailPoet\\EmailEditor\\Validator\\Schema' => $baseDir . '/src/Validator/class-schema.php',
 'MailPoet\\EmailEditor\\Validator\\Schema\\Any_Of_Schema' => $baseDir . '/src/Validator/Schema/class-any-of-schema.php',
 'MailPoet\\EmailEditor\\Validator\\Schema\\Array_Schema' => $baseDir . '/src/Validator/Schema/class-array-schema.php',
 'MailPoet\\EmailEditor\\Validator\\Schema\\Boolean_Schema' => $baseDir . '/src/Validator/Schema/class-boolean-schema.php',
 'MailPoet\\EmailEditor\\Validator\\Schema\\Integer_Schema' => $baseDir . '/src/Validator/Schema/class-integer-schema.php',
 'MailPoet\\EmailEditor\\Validator\\Schema\\Null_Schema' => $baseDir . '/src/Validator/Schema/class-null-schema.php',
 'MailPoet\\EmailEditor\\Validator\\Schema\\Number_Schema' => $baseDir . '/src/Validator/Schema/class-number-schema.php',
 'MailPoet\\EmailEditor\\Validator\\Schema\\Object_Schema' => $baseDir . '/src/Validator/Schema/class-object-schema.php',
 'MailPoet\\EmailEditor\\Validator\\Schema\\One_Of_Schema' => $baseDir . '/src/Validator/Schema/class-one-of-schema.php',
 'MailPoet\\EmailEditor\\Validator\\Schema\\String_Schema' => $baseDir . '/src/Validator/Schema/class-string-schema.php',
 'MailPoet\\EmailEditor\\Validator\\Validation_Exception' => $baseDir . '/src/Validator/class-validation-exception.php',
 'MailPoet\\EmailEditor\\Validator\\Validator' => $baseDir . '/src/Validator/class-validator.php',
 'Soundasleep\\Html2Text' => $vendorDir . '/soundasleep/html2text/src/Html2Text.php',
 'Soundasleep\\Html2TextException' => $vendorDir . '/soundasleep/html2text/src/Html2TextException.php',
);
