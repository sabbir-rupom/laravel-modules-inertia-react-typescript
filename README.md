laravel new laravel-inertia-react-typescript

php artisan breeze:install react --typescript
############
!.tsconfig
{
  "compilerOptions": {
    "lib": ["dom", "dom.iterable", "esnext"],
    "skipLibCheck": true,
    "allowJs": true,
    "module": "ESNext",
    "moduleResolution": "bundler",
    "resolveJsonModule": true,
    "jsx": "preserve",
    "strict": true,
    "isolatedModules": true,
    "target": "ESNext",
    "esModuleInterop": true,
    "forceConsistentCasingInFileNames": true,
    "noEmit": true,
    "noUnusedLocals": true,
    "incremental": true,
    "types": ["vite/client"],
    "paths": {
      "@/*": ["./resources/js/react/*"]
    }
  },
  "include": [
    "resources/js/react/**/*.ts",
    "resources/js/react/**/*.tsx",
    "resources/js/react/**/*.d.ts"
  ]
}
############

npm i -D sass
############
cp ../**/*.css ../**/*.scss
############

npm i @reduxjs/toolkit react-redux next-redux-wrapper

npm install eslint --save-dev

npx eslint --init
############
!.eslintrc.cjs
module.exports = {
    "env": {
        "browser": true,
        "es2021": true
    },
    "extends": [
        "eslint:recommended",
        "plugin:@typescript-eslint/recommended",
        "plugin:react/recommended",
        "plugin:prettier/recommended"
    ],
    "overrides": [
        {
            "env": {
                "node": true
            },
            "files": [
                ".eslintrc.{js,cjs}"
            ],
            "parserOptions": {
                "sourceType": "script"
            }
        }
    ],
    "parser": "@typescript-eslint/parser",
    "parserOptions": {
        "ecmaVersion": "latest",
        "sourceType": "module"
    },
    "plugins": [
        "@typescript-eslint",
        "react"
    ],
    "ignorePatterns": ["temp.js", "Modules/**/*.js"],
    "rules": {
    }
}
############

npm install eslint-config-prettier eslint-plugin-prettier prettier --save-dev
############
!.prettierrc.json
{
  "bracketSpacing": true,
  "printWidth": 80,
  "semi": true,
  "singleQuote": true,
  "trailingComma": "all",
  "tabWidth": 2
}

!.prettierignore 
.npm
.yarn
.next
.vscode
node_modules
build
coverage
dist
package-lock.json
yarn-lock.json
############

composer require nwidart/laravel-modules
##############
{...
    "Modules\\": "Modules/",
...}

composer dump-autoload
#############