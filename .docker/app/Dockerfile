# start with the official Composer image and name it
FROM composer AS composer_stage

# continue with the official PHP image based on Alpine
FROM php:7.4-alpine

# install required php extensions
RUN docker-php-ext-install pdo_mysql

# install ZSH
RUN apk update && \
    apk add zsh git vim zsh-autosuggestions zsh-syntax-highlighting bind-tools curl && \
    rm -rf /var/cache/apk/*

RUN sh -c "$(wget https://raw.github.com/robbyrussell/oh-my-zsh/master/tools/install.sh -O -)"

RUN echo "source /usr/share/zsh/plugins/zsh-syntax-highlighting/zsh-syntax-highlighting.zsh" >> ~/.zshrc && \
    echo "source /usr/share/zsh/plugins/zsh-autosuggestions/zsh-autosuggestions.zsh" >> ~/.zshrc

# copy the Composer PHAR from the Composer image into the PHP image
COPY --from=composer_stage /usr/bin/composer /usr/bin/composer

ENTRYPOINT ["/bin/zsh"]