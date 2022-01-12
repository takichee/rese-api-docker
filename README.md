# rese-api-docker
## 使い方
1. Gitクローン

`git clone https://github.com/takichee/rese-api-docker.git`

2. .envファイルを作成

`touch touch rese-api-docker/backend/.env`

3. rese-api-docker/backend/.env.exampleの中身を.envファイルにコピー

4. コンポーザーをアップデート

`cd rese-api-docker/backend`

`composer update`

5. docker compose up を実行

`docker compose up -d`

6. appコンテナに入る

`docker compose exec app bash`
