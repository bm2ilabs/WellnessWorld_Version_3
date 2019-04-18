<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5e1ef8c594ec50a685f3c4a8b006bcf8
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Toolset\\DynamicSources\\' => 23,
            'ToolsetBlocks\\' => 14,
        ),
        'A' => 
        array (
            'Auryn\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Toolset\\DynamicSources\\' => 
        array (
            0 => __DIR__ . '/..' . '/toolset/dynamic-sources/server',
        ),
        'ToolsetBlocks\\' => 
        array (
            0 => __DIR__ . '/../..' . '/server',
        ),
        'Auryn\\' => 
        array (
            0 => __DIR__ . '/..' . '/rdlowrey/auryn/lib',
        ),
    );

    public static $classMap = array (
        'Auryn\\CachingReflector' => __DIR__ . '/..' . '/rdlowrey/auryn/lib/CachingReflector.php',
        'Auryn\\ConfigException' => __DIR__ . '/..' . '/rdlowrey/auryn/lib/ConfigException.php',
        'Auryn\\Executable' => __DIR__ . '/..' . '/rdlowrey/auryn/lib/Executable.php',
        'Auryn\\InjectionException' => __DIR__ . '/..' . '/rdlowrey/auryn/lib/InjectionException.php',
        'Auryn\\Injector' => __DIR__ . '/..' . '/rdlowrey/auryn/lib/Injector.php',
        'Auryn\\InjectorException' => __DIR__ . '/..' . '/rdlowrey/auryn/lib/InjectorException.php',
        'Auryn\\ReflectionCache' => __DIR__ . '/..' . '/rdlowrey/auryn/lib/ReflectionCache.php',
        'Auryn\\ReflectionCacheApc' => __DIR__ . '/..' . '/rdlowrey/auryn/lib/ReflectionCacheApc.php',
        'Auryn\\ReflectionCacheArray' => __DIR__ . '/..' . '/rdlowrey/auryn/lib/ReflectionCacheArray.php',
        'Auryn\\Reflector' => __DIR__ . '/..' . '/rdlowrey/auryn/lib/Reflector.php',
        'Auryn\\StandardReflector' => __DIR__ . '/..' . '/rdlowrey/auryn/lib/StandardReflector.php',
        'ToolsetBlocks\\Block\\I18n' => __DIR__ . '/../..' . '/server/Block/I18n.php',
        'ToolsetBlocks\\Block\\PublicLoader' => __DIR__ . '/../..' . '/server/Block/PublicLoader.php',
        'ToolsetBlocks\\DicLoader' => __DIR__ . '/../..' . '/server/bootstrap.php',
        'ToolsetBlocks\\Integrations\\Toolset\\Views' => __DIR__ . '/../..' . '/server/Integrations/Toolset/Views.php',
        'ToolsetBlocks\\Library\\WordPress\\I18n' => __DIR__ . '/../..' . '/server/Library/WordPress/I18n.php',
        'ToolsetBlocks\\Library\\WordPress\\Rest' => __DIR__ . '/../..' . '/server/Library/WordPress/Rest.php',
        'ToolsetBlocks\\Library\\WordPress\\User' => __DIR__ . '/../..' . '/server/Library/WordPress/User.php',
        'ToolsetBlocks\\PublicDependencies\\Dependency\\Dashicons' => __DIR__ . '/../..' . '/server/PublicDependencies/Dependency/Dashicons.php',
        'ToolsetBlocks\\PublicDependencies\\Dependency\\ExternalResources' => __DIR__ . '/../..' . '/server/PublicDependencies/Dependency/ExternalResources.php',
        'ToolsetBlocks\\PublicDependencies\\Dependency\\IContent' => __DIR__ . '/../..' . '/server/PublicDependencies/Dependency/IContent.php',
        'ToolsetBlocks\\PublicDependencies\\Dependency\\IGeneral' => __DIR__ . '/../..' . '/server/PublicDependencies/Dependency/IGeneral.php',
        'ToolsetBlocks\\PublicDependencies\\Dependency\\Javascript' => __DIR__ . '/../..' . '/server/PublicDependencies/Dependency/Javascript.php',
        'ToolsetBlocks\\PublicDependencies\\Dependency\\Lightbox' => __DIR__ . '/../..' . '/server/PublicDependencies/Dependency/Lightbox.php',
        'ToolsetBlocks\\PublicDependencies\\Frontend' => __DIR__ . '/../..' . '/server/PublicDependencies/Frontend.php',
        'ToolsetBlocks\\Rest\\API' => __DIR__ . '/../..' . '/server/Rest/API.php',
        'ToolsetBlocks\\Rest\\Route\\ARoute' => __DIR__ . '/../..' . '/server/Rest/Route/ARoute.php',
        'ToolsetBlocks\\Rest\\Route\\IRoute' => __DIR__ . '/../..' . '/server/Rest/Route/IRoute.php',
        'ToolsetBlocks\\Rest\\Route\\MediaObject' => __DIR__ . '/../..' . '/server/Rest/Route/MediaObject.php',
        'ToolsetBlocks\\Rest\\Route\\ShortcodeRender' => __DIR__ . '/../..' . '/server/Rest/Route/ShortcodeRender.php',
        'ToolsetBlocks\\Rest\\Route\\ShortcodeRender\\WithMeta' => __DIR__ . '/../..' . '/server/Rest/Route/ShortcodeRender/WithMeta.php',
        'ToolsetBlocks\\Utils\\ScriptData' => __DIR__ . '/../..' . '/server/Utils/ScriptData.php',
        'ToolsetBlocks\\Utils\\Toolset' => __DIR__ . '/../..' . '/server/Utils/Toolset.php',
        'Toolset\\DynamicSources\\Cache' => __DIR__ . '/..' . '/toolset/dynamic-sources/server/Cache.php',
        'Toolset\\DynamicSources\\DicLoader' => __DIR__ . '/..' . '/toolset/dynamic-sources/server/DicLoader.php',
        'Toolset\\DynamicSources\\DynamicSources' => __DIR__ . '/..' . '/toolset/dynamic-sources/server/DynamicSources.php',
        'Toolset\\DynamicSources\\OtherFieldsSources\\DynamicSourceFactory' => __DIR__ . '/..' . '/toolset/dynamic-sources/server/OtherFieldsSources/DynamicSourceFactory.php',
        'Toolset\\DynamicSources\\OtherFieldsSources\\Main' => __DIR__ . '/..' . '/toolset/dynamic-sources/server/OtherFieldsSources/Main.php',
        'Toolset\\DynamicSources\\OtherFieldsSources\\PostField' => __DIR__ . '/..' . '/toolset/dynamic-sources/server/OtherFieldsSources/PostField.php',
        'Toolset\\DynamicSources\\PostProvider' => __DIR__ . '/..' . '/toolset/dynamic-sources/server/PostProvider.php',
        'Toolset\\DynamicSources\\PostProviders\\IdentityPost' => __DIR__ . '/..' . '/toolset/dynamic-sources/server/PostProviders/IdentityPost.php',
        'Toolset\\DynamicSources\\PostTypeSourceContext' => __DIR__ . '/..' . '/toolset/dynamic-sources/server/PostTypeSourceContext.php',
        'Toolset\\DynamicSources\\Rest' => __DIR__ . '/..' . '/toolset/dynamic-sources/server/Rest.php',
        'Toolset\\DynamicSources\\SourceContext' => __DIR__ . '/..' . '/toolset/dynamic-sources/server/SourceContext.php',
        'Toolset\\DynamicSources\\SourceStorage' => __DIR__ . '/..' . '/toolset/dynamic-sources/server/SourceStorage.php',
        'Toolset\\DynamicSources\\Sources\\AbstractSource' => __DIR__ . '/..' . '/toolset/dynamic-sources/server/Sources/AbstractSource.php',
        'Toolset\\DynamicSources\\Sources\\AuthorID' => __DIR__ . '/..' . '/toolset/dynamic-sources/server/Sources/AuthorID.php',
        'Toolset\\DynamicSources\\Sources\\AuthorName' => __DIR__ . '/..' . '/toolset/dynamic-sources/server/Sources/AuthorName.php',
        'Toolset\\DynamicSources\\Sources\\CommentsNumber' => __DIR__ . '/..' . '/toolset/dynamic-sources/server/Sources/CommentsNumber.php',
        'Toolset\\DynamicSources\\Sources\\CommentsStatus' => __DIR__ . '/..' . '/toolset/dynamic-sources/server/Sources/CommentsStatus.php',
        'Toolset\\DynamicSources\\Sources\\MediaFeaturedImageData' => __DIR__ . '/..' . '/toolset/dynamic-sources/server/Sources/MediaFeaturedImageData.php',
        'Toolset\\DynamicSources\\Sources\\PostContent' => __DIR__ . '/..' . '/toolset/dynamic-sources/server/Sources/PostContent.php',
        'Toolset\\DynamicSources\\Sources\\PostDate' => __DIR__ . '/..' . '/toolset/dynamic-sources/server/Sources/PostDate.php',
        'Toolset\\DynamicSources\\Sources\\PostDateGMT' => __DIR__ . '/..' . '/toolset/dynamic-sources/server/Sources/PostDateGMT.php',
        'Toolset\\DynamicSources\\Sources\\PostDateModified' => __DIR__ . '/..' . '/toolset/dynamic-sources/server/Sources/PostDateModified.php',
        'Toolset\\DynamicSources\\Sources\\PostDateModifiedGMT' => __DIR__ . '/..' . '/toolset/dynamic-sources/server/Sources/PostDateModifiedGMT.php',
        'Toolset\\DynamicSources\\Sources\\PostExcerpt' => __DIR__ . '/..' . '/toolset/dynamic-sources/server/Sources/PostExcerpt.php',
        'Toolset\\DynamicSources\\Sources\\PostID' => __DIR__ . '/..' . '/toolset/dynamic-sources/server/Sources/PostID.php',
        'Toolset\\DynamicSources\\Sources\\PostName' => __DIR__ . '/..' . '/toolset/dynamic-sources/server/Sources/PostName.php',
        'Toolset\\DynamicSources\\Sources\\PostStatus' => __DIR__ . '/..' . '/toolset/dynamic-sources/server/Sources/PostStatus.php',
        'Toolset\\DynamicSources\\Sources\\PostTaxonomies' => __DIR__ . '/..' . '/toolset/dynamic-sources/server/Sources/PostTaxonomies.php',
        'Toolset\\DynamicSources\\Sources\\PostTitle' => __DIR__ . '/..' . '/toolset/dynamic-sources/server/Sources/PostTitle.php',
        'Toolset\\DynamicSources\\Sources\\PostType' => __DIR__ . '/..' . '/toolset/dynamic-sources/server/Sources/PostType.php',
        'Toolset\\DynamicSources\\Sources\\PostURL' => __DIR__ . '/..' . '/toolset/dynamic-sources/server/Sources/PostURL.php',
        'Toolset\\DynamicSources\\Sources\\SiteTagline' => __DIR__ . '/..' . '/toolset/dynamic-sources/server/Sources/SiteTagline.php',
        'Toolset\\DynamicSources\\Sources\\Source' => __DIR__ . '/..' . '/toolset/dynamic-sources/server/Sources/Source.php',
        'Toolset\\DynamicSources\\ToolsetSources\\CustomFieldGroupSource' => __DIR__ . '/..' . '/toolset/dynamic-sources/server/ToolsetSources/CustomFieldGroupSource.php',
        'Toolset\\DynamicSources\\ToolsetSources\\CustomFieldService' => __DIR__ . '/..' . '/toolset/dynamic-sources/server/ToolsetSources/CustomFieldService.php',
        'Toolset\\DynamicSources\\ToolsetSources\\DynamicSourceFactory' => __DIR__ . '/..' . '/toolset/dynamic-sources/server/ToolsetSources/DynamicSourceFactory.php',
        'Toolset\\DynamicSources\\ToolsetSources\\FieldGroupModel' => __DIR__ . '/..' . '/toolset/dynamic-sources/server/ToolsetSources/FieldGroupModel.php',
        'Toolset\\DynamicSources\\ToolsetSources\\FieldInstanceModel' => __DIR__ . '/..' . '/toolset/dynamic-sources/server/ToolsetSources/FieldInstanceModel.php',
        'Toolset\\DynamicSources\\ToolsetSources\\FieldModel' => __DIR__ . '/..' . '/toolset/dynamic-sources/server/ToolsetSources/FieldModel.php',
        'Toolset\\DynamicSources\\ToolsetSources\\Main' => __DIR__ . '/..' . '/toolset/dynamic-sources/server/ToolsetSources/Main.php',
        'Toolset\\DynamicSources\\ToolsetSources\\PostRelationshipModel' => __DIR__ . '/..' . '/toolset/dynamic-sources/server/ToolsetSources/PostRelationshipModel.php',
        'Toolset\\DynamicSources\\ToolsetSources\\PotentiallyEmptySource' => __DIR__ . '/..' . '/toolset/dynamic-sources/server/ToolsetSources/PotentiallyEmptySource.php',
        'Toolset\\DynamicSources\\ToolsetSources\\RelatedPostProvider' => __DIR__ . '/..' . '/toolset/dynamic-sources/server/ToolsetSources/RelatedPostProvider.php',
        'Toolset\\DynamicSources\\ToolsetSources\\RelationshipRole' => __DIR__ . '/..' . '/toolset/dynamic-sources/server/ToolsetSources/RelationshipRole.php',
        'Toolset\\DynamicSources\\ToolsetSources\\RelationshipService' => __DIR__ . '/..' . '/toolset/dynamic-sources/server/ToolsetSources/RelationshipService.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5e1ef8c594ec50a685f3c4a8b006bcf8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5e1ef8c594ec50a685f3c4a8b006bcf8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5e1ef8c594ec50a685f3c4a8b006bcf8::$classMap;

        }, null, ClassLoader::class);
    }
}